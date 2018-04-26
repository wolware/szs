<?php

namespace App\Http\Controllers;

use App\Athletics;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class StadionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function new_show()
    {
        return view('objects.stadion.new');
    }
    public function stadion_show($id){
        $stadion = DB::table('stadion')->where('id', $id)->first();
        $vremeplov = DB::table('vremeplov_objekta')->where('objekat_id', $id)->first();
        $galerija = DB::table('galerija_objekat')->where('objekat_id', $id)->get();
        return view('objects.stadion.profile', ['stadion' => $stadion, 'vremeplov' => $vremeplov, 'galerija' => $galerija]);
    }

    public function new(Request $data){
        $messages = [
            'required' => ':attribute polje je obavezno.',
            'max' => ':attribute mora imati manje karaktera od :max',
            'min' => ':attribute mora imati više karaktera od :min',
            'confirmed' => ':attribute se ne podudara.',
            'integer' => ':attribute mora biti broj',
        ];
        $validator = Validator::make($data->all(),[
            'naziv' => 'required|max:255|string',
            'kontinent' => 'required|max:255|string',
            'drzava' => 'required|max:255|string',
            'entitet' => 'required',
            /*'kanton' => 'required',
            'opcina' => 'required',*/
            'grad' => 'required',
            /*'klub' => 'required',
            'visina' => 'required',
            'tezina' => 'required'*/
        ], $messages);
        if($validator->fails()){
            return redirect('objects/stadion/new')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $newLogoName = '';
            if($data->file('profilna')){
                $avatar = $data->file('profilna');
                $newLogoName = time() . rand(111,999) . '.' . $avatar->getClientOriginalExtension();
                $destinationPath = public_path('/images/objects_profilne');
                $avatar->move($destinationPath, $newLogoName);

                $data['profilna'] = $newLogoName;
            }else{
                $data['profilna'] = 'default.png';
            }

            if(empty($data['kanton'])){
                $data['kanton'] = $data['kantonSrb'];
            }
            if(empty($data['opcina'])){
                $data['opcina'] = $data['opcinaSrb'];
            }
            $id = DB::table('stadion')->insertGetId([
                'profilna' => $newLogoName,
                'naziv' => $data['naziv'],
                'kontinent' => $data['kontinent'],
                'drzava' => $data['drzava'],
                'entitet' => $data['entitet'],
                'opcina' => $data['opcina'],
                'kanton' => $data['kanton'],
                'grad' => $data['grad'],
                'fb' => $data['fb'],
                'instagram' => $data['instagram'],
                'youtube' => $data['youtube'],
                'google_map' => $data['google_map'],
                'datum_otvorenja' => $data['datum_otvorenja'],
                'vrsta_travnjaka' => $data['vrsta_travnjaka'],
                'duzina_terena' => $data['duzina_terena'],
                'sirina_terena' => $data['sirina_terena'],
                'kapacitet_objekta' => $data['kapacitet_objekta'],
                'wifi' => $data['wifi'],
                'parking' => $data['parking'],
                'restoran' => $data['restoran'],
                'kafeterija' => $data['kafeterija'],
                'pristup_invalid' => $data['pristup_invalid'],
                'broj_ormarica' => $data['broj_ormarica'],
                'tusevi' => $data['tusevi'],
                'tabla' => $data['tabla'],
                'rekviziti' => $data['rekviziti'],
                'kabine' => $data['kabine'],
                'mokri_cvor' => $data['mokri_cvor'],
                'razglas' => $data['razglas'],
                'zastitne_ograde' => $data['zastitne_ograde'],
                'fan_shop' => $data['fan_shop'],
                'video_nadzor' => $data['video_nadzor'],
             ]);

            if(!empty($data['content'])){
                DB::table('vremeplov_objekta')->insert([
                    'content' => $data['content'],
                    'objekat' => 'stadion',
                    'objekat_id' => $id
                ]);
            }else{
                DB::table('vremeplov_objekta')->insert([
                    'content' => "",
                    'objekat' => 'stadion',
                    'objekat_id' => $id
                ]);
            }

            if($data->hasFile('galerija')){
                $galerije = $data->file('galerija');
                foreach($galerije as $key=>$gal){
                    $newgalName = time() . time() . rand(4,9) . '.' . $gal->getClientOriginalExtension();
                    $destPath = public_path('/images/galerija_objekti');
                    $gal->move($destPath, $newgalName);

                    DB::table('galerija_objekat')->insert([
                        'url' => $newgalName,
                    'objekat' => 'stadion',
                        'objekat_id' => $id
                    ]);
                }
            }else{
               DB::table('sportista_galerija')->insert([
                    'url' => "default.png",
                    'objekat' => 'stadion',
                    'objekat_id' => $id
                ]); 
            }

             return redirect('objects/stadion/'.$id);
        }
    }


}
