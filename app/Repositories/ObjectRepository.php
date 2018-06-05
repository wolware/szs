<?php

namespace App\Repositories;

use App\Gallery;
use App\Objects;
use App\ObjectTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ObjectRepository {
    protected $model;
    protected $objectTypeModel;

    /**
     * ObjectRepository constructor.
     * @param Objects $model
     * @param ObjectTypes $objectTypes
     */
    public function __construct(Objects $model, ObjectTypes $objectTypes){
        $this->model = $model;
        $this->objectTypeModel = $objectTypes;
    }

    public function getAllObjectTypes() {
        return $this->objectTypeModel->all();
    }

    public function getById($id) {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    public function getObjectTypeById($id) {
        return $this->objectTypeModel
            ->where('id', $id)
            ->first();
    }

    public function createObject(Request $request, ObjectTypes $object_type, $unique_columns) {
        $newLogoName = 'default.png';

        if($request->file('image')){
            $logo = $request->file('image');
            $newLogoName = time() . '-' . Auth::user()->id . '.' . $logo->getClientOriginalExtension();
            $destinationPath = public_path('/images/object_avatars');
            $logo->move($destinationPath, $newLogoName);
        }

        // Provjeri najmanji level regije
        $region_id = $request->get('country');

        if($request->has('province')) {
            $region_id = $request->get('province');
        }

        if($request->has('region')) {
            $region_id = $request->get('region');
        }

        if($request->has('municipality')) {
            $region_id = $request->get('municipality');
        }

        $createGeneralObject = $this->model->create([
            'name' => $request->get('name'),
            'image' => $newLogoName,
            'city' => $request->get('city'),
            'established_in' => new Carbon($request->get('established_in')),
            'facebook' => $request->get('facebook'),
            'instagram' => $request->get('instagram'),
            'twitter' => $request->get('twitter'),
            'youtube' => $request->get('youtube'),
            'region_id' => $region_id,
            'object_type_id' => $object_type->id,
            'latitude' => $request->get('latitude'),
            'longitude' => $request->get('longitude'),
            'history' => $request->get('history'),
            'user_id' => Auth::user()->id
        ]);

        if($createGeneralObject) {
            $attributesToInsert = [];
            $attributesToInsert['id'] = $createGeneralObject->id;

            foreach ($unique_columns as $column) {
                $attributesToInsert[$column] = $request->get($column);
            }

            $attributesToInsert['object_type_id'] = $object_type->id;
            $attributesToInsert['created_at'] = new Carbon();
            $attributesToInsert['updated_at'] = new Carbon();

            $createObjectUnique = DB::table($object_type->object_table)->insert($attributesToInsert);

            if($createObjectUnique) {

                if($request->file('galerija')){
                    $galerije = $request->file('galerija');
                    foreach($galerije as $key => $slika){
                        $newgalName = $key . '-' .time() . '-' .  $createGeneralObject->id . '.' . $slika->getClientOriginalExtension();
                        $destPath = public_path('/images/galerija_objekti');
                        $slika->move($destPath, $newgalName);

                        Gallery::create([
                            'image' => $newgalName,
                            'object_id' => $createGeneralObject->id
                        ]);
                    }
                }

                // Ovdje handle za dodavanje staza cijena i ostalog
                if($object_type->type == 'Balon') {
                    if($request->filled('tereni')){
                        $tereni = $request->get('tereni');
                        foreach ($tereni as $teren) {
                            if($teren) {
                                DB::table('balon_fields')->insert([
                                    'name' => $teren['name'],
                                    'sports' => implode(",",$teren['sports']),
                                    'type_of_field' => $teren['type_of_field'],
                                    'capacity' => $teren['capacity'] ? $teren['capacity'] : null,
                                    'public_capacity' => $teren['public_capacity'] ? $teren['public_capacity'] : null,
                                    'length' => $teren['length'] ? $teren['length'] : null,
                                    'width' => $teren['width'] ? $teren['width'] : null,
                                    'balon_objects_id' => $createGeneralObject->id,
                                    'created_at' => new Carbon(),
                                    'updated_at' => new Carbon()
                                ]);
                            }
                        }
                    }
                    if($request->filled('cjenovnik')){
                        $cjenovnik = $request->get('cjenovnik');
                        foreach ($cjenovnik as $cijena) {
                            if($cijena) {
                                DB::table('balon_prices')->insert([
                                    'sport' => $cijena['sport'],
                                    'name' => $cijena['name'],
                                    'price_per_hour' => $cijena['price_per_hour'],
                                    'balon_objects_id' => $createGeneralObject->id,
                                    'created_at' => new Carbon(),
                                    'updated_at' => new Carbon()
                                ]);
                            }
                        }
                    }
                } else if($object_type->type == 'Skijalište') {
                    if($request->filled('staze')){
                        $staze = $request->get('staze');
                        foreach ($staze as $staza) {
                            if($staza) {
                                DB::table('skiing_tracks')->insert([
                                    'name' => $staza['name'],
                                    'level' => $staza['level'],
                                    'length' => $staza['length'] ? $staza['length'] : null,
                                    'time' => $staza['time'] ? $staza['time'] : null,
                                    'start_point' => $staza['start_point'] ? $staza['start_point'] : null,
                                    'end_point' => $staza['end_point'] ? $staza['end_point'] : null,
                                    'skiing_objects_id' => $createGeneralObject->id,
                                    'created_at' => new Carbon(),
                                    'updated_at' => new Carbon()
                                ]);
                            }
                        }
                    }

                    if($request->filled('cjenovnik')){
                        $cjenovnik = $request->get('cjenovnik');
                        foreach ($cjenovnik as $cijena) {
                            if($cijena) {
                                DB::table('skiing_prices')->insert([
                                    'description' => $cijena['description'],
                                    'price' => $cijena['price'],
                                    'price_kids' => $cijena['price_kids'],
                                    'skiing_objects_id' => $createGeneralObject->id,
                                    'created_at' => new Carbon(),
                                    'updated_at' => new Carbon()
                                ]);
                            }
                        }
                    }
                }

                return $createGeneralObject;
            } else {
                $createGeneralObject->delete();
                return null;
            }
        }

        return null;
    }

}