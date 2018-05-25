<?php

namespace App\Repositories;

use App\Gallery;
use App\Language;
use App\Staff;
use App\StaffWorkHistory;
use App\Trophy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffRepository {
    protected $model;

    public function __construct(Staff $model){
        $this->model = $model;
    }

    public function createStaff(Request $request) {
        $newLogoName = 'default.png';

        if($request->file('avatar')){
            $logo = $request->file('avatar');
            $newLogoName = time() . '-' . Auth::user()->id . '.' . $logo->getClientOriginalExtension();
            $destinationPath = public_path('/images/staff_avatars');
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

        $attributesToInsert = [
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'avatar' => $newLogoName,
            'date_of_birth' => new Carbon($request->get('date_of_birth')),
            'facebook' => $request->get('facebook'),
            'twitter' => $request->get('twitter'),
            'instagram' => $request->get('instagram'),
            'youtube' => $request->get('youtube'),
            'video' => $request->get('video'),
            'region_id' => $region_id,
            'profession_id' => $request->get('profession'),
            'biography' => $request->get('biography'),
            'user_id' => Auth::user()->id,
            'city' => $request->get('city'),
            'education' => $request->get('education'),
            'additional_education' => $request->get('additional_education'),
            'number_of_certificates' => $request->get('number_of_certificates'),
            'number_of_projects' => $request->get('number_of_projects'),
            'work_experience' => $request->get('work_experience'),
        ];

        if($request->has('requested_club')) {
            $attributesToInsert['requested_club'] = $request->get('requested_club');
        } else {
            $attributesToInsert['club_name'] = $request->get('club_name');
        }

        $createStaff = $this->model->create($attributesToInsert);

        if($createStaff) {
                if($request->filled('history')){
                    foreach($request->get('history') as $key => $history){
                        if($history){
                            StaffWorkHistory::create([
                                'season' => $history['season'],
                                'club' => $history['club'],
                                'staff_id' => $createStaff->id
                            ]);
                        }
                    }
                }

                if($request->filled('languages')){
                    $createStaff->languages()->attach($request->get('languages'));
                }

                if($request->filled('nagrada')){
                    foreach($request->get('nagrada') as $key => $nagrada){
                        if($nagrada){
                            Trophy::create([
                                'type' => $nagrada['vrsta'],
                                'place' => $nagrada['tip'],
                                'competition_name' => $nagrada['takmicenje'],
                                'level_of_competition' =>  $nagrada['nivo'],
                                'season' =>  $nagrada['sezona'],
                                'staff_id' => $createStaff->id
                            ]);
                        }
                    }
                }

                if($request->file('galerija')){
                    $galerije = $request->file('galerija');
                    foreach($galerije as $key => $slika){
                        $newgalName = $key . '-' .time() . '-' .  $createStaff->id . '.' . $slika->getClientOriginalExtension();
                        $destPath = public_path('/images/galerija_kadrovi');
                        $slika->move($destPath, $newgalName);

                        Gallery::create([
                            'image' => $newgalName,
                            'staff_id' => $createStaff->id
                        ]);
                    }
                }

                return $createStaff;
        } else {
            $createStaff->delete();
            return null;
        }
    }

    public function getById($id) {
        return $this->model
            ->where('id', $id)
            ->with(['languages', 'profession', 'work_history', 'region', 'current_club', 'user', 'trophies', 'images'])
            ->first();
    }

}
