<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Club;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ClubController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function new_show()
    {
        return view('clubs.new');
    }
    public function clubs_add(){
        return view('clubs.add');
    }
    public function index_show(){
        $data = DB::table('clubs')->get();
        return view('clubs.index', ['data' => $data]);
    }
    public function show($id){
        $personal = DB::table('clubs')->where('id', $id)->first();
        $vremeplov = DB::table('vremeplov')->where('club_id', $id)->first();
        $trofej = DB::table('trofej')->where('club_id', $id)->get();
        $licnosti = DB::table('istaknute_licnosti')->where('club_id', $id)->get();
        $galerija = DB::table('clubs_galerija')->where('club_id', $id)->get();
        return view('clubs.profile', ['personal' => $personal, 'vremeplov' => $vremeplov, 'trofej' => $trofej, 'licnosti' => $licnosti, 'galerija' => $galerija]);
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
    		'name' => 'required|max:255|string',
    		'karakter' => 'required|max:255|string',
    		'kontinent' => 'required|max:255|string',
    		'drzava' => 'required|max:255|string',
    		'entitet' => 'required',
    		/*'kanton' => 'required',
    		'opcina' => 'required',*/
    		'grad' => 'required',
    		'tip' => 'required',
    		'kategorija' => 'required',
    		/*'godina_osnivanja' => 'required|integer',
    		'teren' => 'required|max:255|string',
    		'takmicenje' => 'required',
    		'savez' => 'required',
    		'adresa' => 'required'*/
    	], $messages);
    	if($validator->fails()){
    		return redirect('clubs/new')
    					->withErrors($validator)
    					->withInput();
    	}else{
    		if($data->file('logo')){
    			$logo = $data->file('logo');
    			$newLogoName = time() . rand(111,999) . '.' . $logo->getClientOriginalExtension();
    			$destinationPath = public_path('/images/club_logo');
    			$logo->move($destinationPath, $newLogoName);

    			$data['logo'] = $newLogoName;
    		}else{
                $data['logo'] = 'default.png';
            }
            if(empty($data['kanton'])){
                $data['kanton'] = $data['kantonSrb'];
            }
            if(empty($data['opcina'])){
                $data['opcina'] = $data['opcinaSrb'];
            }
            $id = DB::table('clubs')->insertGetId([
                'logo' => $newLogoName,
                'name' => $data['name'],
                'karakter' => $data['karakter'],
                'kontinent' => $data['kontinent'],
                'drzava' => $data['drzava'],
                'regija' => $data['regija'],
                'entitet' => $data['entitet'],
                'opcina' => $data['opcina'],
                'kanton' => $data['kanton'],
                'grad' => $data['grad'],
                'tip' => $data['tip'],
                'kategorija' => $data['kategorija'],
                'godina_osnivanja' => $data['godina_osnivanja'],
                'teren' => $data['teren'],
                'takmicenje' => $data['takmicenje'],
                'savez' => $data['savez'],
                'adresa' => $data['adresa'],
                'objavljeno' => time(),
                'user_id' => Auth::user()->id,
                'views' => 0,
                'status' => '0'
            ]);

            if(!empty($data['vremeplov'])){
                DB::table('vremeplov')->insert([
                    'content' => $data['vremeplov'],
                    'club_id' => $id
                ]);
            }else{
                DB::table('vremeplov')->insert([
                    'content' => "",
                    'club_id' => $id
                ]);
            }

            if(!empty($data['trofej_takmicenja'][0])){
                foreach($data['trofej_takmicenja'] as $key=>$t_t){
                   if(!empty($t_t)){
                         DB::table('trofej')->insert([
                            'vrsta_nagrade' => $data['vrsta_nagrade'][$key],
                            'tip_nagrade' => $data['tip_nagrade'][$key],
                            'naziv_takmicenja' => $data['trofej_takmicenja'][$key],
                            'nivo_takmicenja' => $data['nivo_nagrade'][$key],
                            'sezona' => $data['trofej_sezona'][$key],
                            'osvajanje' => $data['trofej_osvajanja'][$key],
                            'club_id' => $id
                        ]);
                     }else{
                        continue;
                     }
                }
            }else{
                DB::table('trofej')->insert([
                    'vrsta_nagrade' => "",
                    'tip_nagrade' => "",
                    'naziv_takmicenja' => "",
                    'nivo_takmicenja' => "",
                    'sezona' => "",
                    'osvajanje' => "",
                    'club_id' => $id
                ]);
            }

            if($data->hasFile('avatar_licnost')){
                $avatar_licnosti = $data->file('avatar_licnost');
                foreach($avatar_licnosti as $key=>$a_l){
                    if(!empty($data['licnost_ime'][$key]) || $data['licnost_ime'][$key] != ''){
                        $newavatarlicnostiName = time() . time() . rand(4,9) . '.' . $a_l->getClientOriginalExtension();
                        $destPath = public_path('/images/avatar_licnost');
                        $a_l->move($destPath, $newavatarlicnostiName);

                        DB::table('istaknute_licnosti')->insert([
                            'avatar' => $newavatarlicnostiName,
                            'ime' => $data['licnost_ime'][$key],
                            'prezime' => $data['licnost_prezime'][$key],
                            'opis' => $data['licnost_opis'][$key],
                            'club_id' => $id
                        ]);
                    }
                }
            }else{
                DB::table('istaknute_licnosti')->insert([
                    'avatar' => "default_avatar.png",
                    'ime' => "",
                    'prezime' => "",
                    'opis' => "",
                    'club_id' => $id
                ]);
            }

            if($data->hasFile('galerija')){
                $galerije = $data->file('galerija');
                foreach($galerije as $key=>$gal){
                    $newgalName = time() . time() . rand(4,9) . '.' . $gal->getClientOriginalExtension();
                    $destPath = public_path('/images/galerija_klub');
                    $gal->move($destPath, $newgalName);

                    DB::table('clubs_galerija')->insert([
                        'image' => $newgalName,
                        'club_id' => $id
                    ]);
                }
            }else{
                DB::table('clubs_galerija')->insert([
                    'image' => "default_galerija.png",
                    'club_id' => $id
                ]);
            }

             return redirect('clubs/'.$id.'/edit');
    	}
    }

    public function edit_club_show($id){
        $data = DB::table('clubs')->where('id', $id)->first();
        $licnosti = DB::table('istaknute_licnosti')->where('club_id', $id)->get();
        $vremeplov = DB::table('vremeplov')->where('club_id', $id)->first();
        $trofeji = DB::table('trofej')->where('club_id', $id)->get();
        $galerija = DB::table('clubs_galerija')->where('club_id', $id)->get();
        return view('clubs.edit', ['data' => $data, 'licnosti' => $licnosti, 'vremeplov' => $vremeplov, 'trofeji' => $trofeji, 'galerija' => $galerija]);
    }

    public function edit_club(Request $data, $id){
        $messages = [
            'required' => ':attribute polje je obavezno.',
            'max' => ':attribute mora imati manje karaktera od :max',
            'min' => ':attribute mora imati više karaktera od :min',
            'confirmed' => ':attribute se ne podudara.',
            'integer' => ':attribute mora biti broj',
            'logo.max' => 'logo mora biti manji od 2MB'
        ];
        $validator = Validator::make($data->all(),[
            'logo_klub' => 'max:2048',
            'name' => 'required|max:255|string',
            'karakter' => 'required|max:255|string',
            'kontinent' => 'required|max:255|string',
            'drzava' => 'required|max:255|string',
            'entitet' => 'required',
            'kanton' => 'required',
            'opcina' => 'required',
            'grad' => 'required',
            'tip' => 'required',
            'kategorija' => 'required',
            /*'godina_osnivanja' => 'required|integer',
            'teren' => 'required|max:255|string',
            'takmicenje' => 'required',
            'savez' => 'required',
            'adresa' => 'required'*/
        ], $messages);
        if($validator->fails()){
            return redirect('clubs/'.$id.'/edit')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            if($data->file('logo_klub')){
               $logo = $data->file('logo_klub');
                $newLogoName = time() . rand(111,999) . '.' . $logo->getClientOriginalExtension();
                $destinationPath = public_path('/images/club_logo');
                $logo->move($destinationPath, $newLogoName);

                $data['logo'] = $newLogoName; 
            }

            DB::table('clubs')->where('id', $id)->update($data->all());
            //$club->logo = $newLogoName;
            //$club->update($data->all());
            flash('Uspješno ste editovali Vaš klub.');
            return redirect('clubs/'.$id.'/edit');


           
        }
    }

    public function edit_licnost(Request $data, $id){
        $messages = [
            'required' => ':attribute polje je obavezno.',
            'max' => ':attribute mora imati manje karaktera od :max',
            'min' => ':attribute mora imati više karaktera od :min',
            'confirmed' => ':attribute se ne podudara.',
            'integer' => ':attribute mora biti broj',
            'avatar.max' => 'logo mora biti manji od 2MB'
        ];
        $validator = Validator::make($data->all(),[
            'avatar_licnost' => 'max:2048',
            'ime' => 'required|max:255|string',
            'prezime' => 'required|max:255|string',
            'opis' => 'required|max:300',
        ], $messages);

        $lic = DB::table('istaknute_licnosti')->where('id', $id)->first();
        if($validator->fails()){
            return redirect('clubs/'.$lic->club_id.'/edit')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            if($data->file('avatar_licnost')){
               $logo = $data->file('avatar_licnost');
                $newLogoName = time() . rand(111,999) . '.' . $logo->getClientOriginalExtension();
                $destinationPath = public_path('/images/avatar_licnost');
                $logo->move($destinationPath, $newLogoName);

                $data['avatar'] = $newLogoName;
            }
            DB::table('istaknute_licnosti')->where('id', $id)->update($data->all());
            //$club->logo = $newLogoName;
            //$club->update($data->all());
            flash('Uspješno ste editovali istaknutu ličnost.');
            return redirect('clubs/'.$lic->club_id.'/edit');
        }
    }
    public function edit_vremeplov(Request $data, $id){
        $messages = [
            'required' => ':attribute polje je obavezno.',
            'max' => ':attribute mora imati manje karaktera od :max',
            'min' => ':attribute mora imati više karaktera od :min',
            'confirmed' => ':attribute se ne podudara.',
            'integer' => ':attribute mora biti broj',
            'avatar.max' => 'logo mora biti manji od 2MB'
        ];
        $validator = Validator::make($data->all(),[
            'content' => 'max:350',
        ], $messages);

        $lic = DB::table('vremeplov')->where('id', $id)->first();
        if($validator->fails()){
            return redirect('clubs/'.$lic->club_id.'/edit')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            DB::table('vremeplov')->where('id', $id)->update($data->all());
            //$club->logo = $newLogoName;
            //$club->update($data->all());
            flash('Uspješno ste editovali vremeplov.');
            return redirect('clubs/'.$lic->club_id.'/edit');
        }
    }
    public function edit_trofej(Request $data, $id){
        $messages = [
            'required' => ':attribute polje je obavezno.',
            'max' => ':attribute mora imati manje karaktera od :max',
            'min' => ':attribute mora imati više karaktera od :min',
            'confirmed' => ':attribute se ne podudara.',
            'integer' => ':attribute mora biti broj',
            'avatar.max' => 'logo mora biti manji od 2MB'
        ];
        $validator = Validator::make($data->all(),[
            'tip_nagrade' => 'required|max:255|string',
            'vrsta_nagrade' => 'required|max:255|string',
            'nivo_takmicenja' => 'required|max:255|string',
            'sezona' => 'required|max:255',
            'osvajanje' => 'required|max:255',
            'naziv_takmicenja' => 'required|max:255|string',
        ], $messages);

        $lic = DB::table('trofej')->where('id', $id)->first();
        if($validator->fails()){
            return redirect('clubs/'.$lic->club_id.'/edit')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            DB::table('trofej')->where('id', $id)->update($data->all());
            //$club->logo = $newLogoName;
            //$club->update($data->all());
            flash('Uspješno ste editovali trofej.');
            return redirect('clubs/'.$lic->club_id.'/edit');
        }
    }
    public function edit_galerija(Request $data, $id){
        if($data->hasFile('galerija')){
            $galerije = $data->file('galerija');
            foreach($galerije as $key=>$gal){
                $newgalName = time() . time() . rand(4,9) . '.' . $gal->getClientOriginalExtension();
                $destPath = public_path('/images/galerija_klub');
                $gal->move($destPath, $newgalName);

                DB::table('clubs_galerija')->insert([
                    'image' => $newgalName,
                    'club_id' => $id
                ]);
            }
        }
        return redirect('clubs/'.$id.'/edit');
    }
}
