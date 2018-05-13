<?php

namespace App\Http\Controllers;

use App\Repositories\ClubRepository;
use App\Repositories\RegionRepository;
use App\Repositories\SportRepository;
use Illuminate\Http\Request;
use App\User;
use App\Club;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ClubController extends Controller
{
    protected $regionRepository;
    protected $sportRepository;
    protected $clubRepository;

    /**
     * Create a new controller instance.
     *
     * @param RegionRepository $regionRepository
     * @param SportRepository $sportRepository
     * @param ClubRepository $clubRepository
     */
    public function __construct(RegionRepository $regionRepository, SportRepository $sportRepository, ClubRepository $clubRepository)
    {
        $this->middleware('auth')->except(['club_show', 'index_show']);
        $this->regionRepository = $regionRepository;
        $this->sportRepository = $sportRepository;
        $this->clubRepository = $clubRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function new_show()
    {
        $regions = $this->regionRepository->getAll();
        $sports = $this->sportRepository->getAll();
        $clubCategories = $this->clubRepository->getSportCategories();

        return view('clubs.new', compact('regions', 'sports', 'clubCategories'));
    }
    public function clubs_add(){
        return view('clubs.add');
    }
    public function index_show(Request $data){
        $q = DB::table('clubs');
        if(Input::has('kategorija')){
            $q->where('kategorija', Input::get('kategorija'));
        }
        if(Input::has('tip')){
            $q->where('tip', Input::get('tip'));
        }
        if(Input::has('sport')){
            $q->where('sport', Input::get('sport'));
        }
        if(Input::has('entitet')){
            $q->where('entitet', Input::get('entitet'));
        }
        if(Input::has('kanton')){
            $q->where('kanton', Input::get('kanton'));
        }
        if(Input::has('opcina')){
            $q->where('opcina', Input::get('opcina'));
        }


        $data = $q->get();
        return view('clubs.index', ['data' => $data]);
    }
    public function club_show($id){
        $personal = DB::table('clubs')->where('id', $id)->first();
        $vremeplov = DB::table('vremeplov')->where('club_id', $id)->first();
        $trofej = DB::table('trofej')->where('club_id', $id)->get();
        $licnosti = DB::table('istaknute_licnosti')->where('club_id', $id)->get();
        $galerija = DB::table('clubs_galerija')->where('club_id', $id)->get();
        $user = DB::table('users')->where('id', $personal->user_id)->first();
        return view('clubs.profile', ['personal' => $personal, 'vremeplov' => $vremeplov, 'trofej' => $trofej, 'licnosti' => $licnosti, 'galerija' => $galerija, 'user' => $user]);
    }

    public function new(Request $data){

    	$validator = Validator::make($data->all(),[
    	    'logo' => 'required|image|dimensions:min_width=200,min_height=200,max_width=1024,max_height=1024',
    		'name' => 'required|max:255|string',
    		'karakter' => 'required|max:255|string',
    		'kontinent' => 'required|max:255|string|in:Evropa',
    		'drzava' => 'required|max:255|string|in:Bosna i Hercegovina',
    		'entitet' => 'required|max:255|string|in:Federacija BiH,Republika Srpska',
    		'kanton' => 'required_if:entitet,Federacija BiH|nullable|max:255|string',
    		'opcina' => 'required_if:entitet,Federacija BiH|nullable|max:255|string',
            'opcinaSrb' => 'required_if:entitet,Republika Srpska|nullable|max:255|string',
    		'regija' => 'required_if:entitet,Republika Srpska|nullable|max:255|string',
    		'grad' => 'required|max:255|string',
    		'tip' => 'required|max:255|string|in:Sportski klub,Invalidski sportski klub',
    		'sport' => 'required_if:tip,Sportski klub|nullable|max:255|string',
    		'invalidski_sport' => 'required_if:tip,Invalidski sportski klub|nullable|max:255|string',
    		'kategorija' => 'required|max:255|string|in:Muški klub,Ženski klub,Mješovito',
    		'godina_osnivanja' => 'nullable|digits:4|integer|min:1800|max:'.date('Y'),
    		'teren' => 'nullable|max:255|string',
    		'takmicenje' => 'nullable|max:255|string',
    		'savez' => 'nullable|max:255|string|in:Državni savez,Entitetski savez,Kantonalni savez',
    		'telefon1' => 'nullable|max:50|string',
            'telefon2' => 'nullable|max:50|string',
            'fax' => 'nullable|max:50|string',
            'email' => 'nullable|max:255|email',
            'web_stranica' => 'nullable|max:255|string',
    		'adresa' => 'nullable|max:255|string',
            'fb' => 'nullable|max:255|string',
            'instagram' => 'nullable|max:255|string',
            'twitter' => 'nullable|max:255|string',
            'yt' => 'nullable|max:255|string',
            'video' => 'nullable|max:255|string',
            'vremeplov' => 'nullable|string',
            // Licnosti
            'licnost' => 'array',
            'licnost.*' => 'array',
            'licnost.*.avatar' => 'image|dimensions:min_width=312,min_height=250,max_width=1920,max_height=1080',
            'licnost.*.ime' => 'required|max:255|string',
            'licnost.*.prezime' => 'required|max:255|string',
            'licnost.*.opis' => 'nullable|max:1000|string',
            // Nagrade
            'nagrada' => 'array',
            'nagrada.*' => 'array',
            'nagrada.*.vrsta' => 'required|max:255|string|in:Medalja,Trofej/Pehar,Priznanje,Plaketa',
            'nagrada.*.tip' => 'required|max:255|string|in:Zlato,Srebro,Bronza,Ostalo',
            'nagrada.*.nivo' => 'required|max:255|string|in:Internacionalni nivo,Regionalni nivo,Državni nivo,Entitetski nivo,Drugo',
            'nagrada.*.takmicenje' => 'required|max:255|string',
            'nagrada.*.sezona' => 'required|max:9|string',
            'nagrada.*.osvajanja' => 'nullable|integer',
            // Slike
            'galerija' => 'array',
            'galerija.*' => 'required|image',
    	]);
    	if($validator->fails()){
    		return redirect('clubs/new')
    					->withErrors($validator)
    					->withInput();
    	}else{
    		if($data->file('logo')){
    			$logo = $data->file('logo');
    			$newLogoName = time() . '-' . Auth::user()->id . '.' . $logo->getClientOriginalExtension();
    			$destinationPath = public_path('/images/club_logo');
    			$logo->move($destinationPath, $newLogoName);
    		} else {
                $newLogoName = 'default.png';
            }

            if(!$data['opcina']){
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
                'sport' => $data['sport'],
                'invalidski_sport' => $data['invalidski_sport'],
                'kategorija' => $data['kategorija'],
                'godina_osnivanja' => $data['godina_osnivanja'],
                'teren' => $data['teren'],
                'takmicenje' => $data['takmicenje'],
                'savez' => $data['savez'],
                'telefon1' => $data['telefon1'],
                'telefon2' => $data['telefon2'],
                'fax' => $data['fax'],
                'email' => $data['email'],
                'web_stranica' => $data['web_stranica'],
                'adresa' => $data['adresa'],
                'fb' => $data['fb'],
                'twitter' => $data['twitter'],
                'instagram' => $data['instagram'],
                'yt' => $data['yt'],
                'video' => $data['video'],
                'objavljeno' => time(),
                'user_id' => Auth::user()->id
            ]);

            if($data['vremeplov']){
                DB::table('vremeplov')->insert([
                    'content' => $data['vremeplov'],
                    'club_id' => $id
                ]);
            } else {
                DB::table('vremeplov')->insert([
                    'content' => "",
                    'club_id' => $id
                ]);
            }

            if($data['nagrada']){
                foreach($data['nagrada'] as $key => $t_t){
                   if($t_t){
                         DB::table('trofej')->insert([
                            'vrsta_nagrade' => $data['nagrada'][$key]['vrsta'],
                            'tip_nagrade' => $data['nagrada'][$key]['tip'],
                            'naziv_takmicenja' => $data['nagrada'][$key]['takmicenje'],
                            'nivo_takmicenja' =>  $data['nagrada'][$key]['nivo'],
                            'sezona' =>  $data['nagrada'][$key]['sezona'],
                            'osvajanje' =>  $data['nagrada'][$key]['osvajanja'] ? $data['nagrada'][$key]['osvajanja'] : null ,
                            'club_id' => $id
                        ]);
                   }
                }
            }

            if($data['licnost']){

                foreach($data['licnost'] as $key => $a_l){
                    if($a_l){
                        $logo = array_key_exists('avatar', $data['licnost'][$key]) ? $data['licnost'][$key]['avatar'] : null;
                        if($logo) {
                            $newavatarlicnostiName = time() . '-' . $id . '.' . $logo->getClientOriginalExtension();
                            $destPath = public_path('/images/avatar_licnost');
                            $logo->move($destPath, $newavatarlicnostiName);
                        } else {
                            $newavatarlicnostiName = 'default_avatar.png';
                        }

                        DB::table('istaknute_licnosti')->insert([
                            'avatar' => $newavatarlicnostiName,
                            'ime' => $data['licnost'][$key]['ime'],
                            'prezime' => $data['licnost'][$key]['prezime'],
                            'opis' => $data['licnost'][$key]['opis'] ? $data['licnost'][$key]['opis'] : null,
                            'club_id' => $id
                        ]);
                    }
                }
            }

            if($data['galerija']){
                $galerije = $data['galerija'];
                foreach($galerije as $key=>$gal){
                    $newgalName = $key . '-' .time() . '-' .  $id . '.' . $gal->getClientOriginalExtension();
                    $destPath = public_path('/images/galerija_klub');
                    $gal->move($destPath, $newgalName);

                    DB::table('clubs_galerija')->insert([
                        'image' => $newgalName,
                        'club_id' => $id
                    ]);
                }
            }

            return redirect('/clubs/'.$id.'/edit');
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
        $validator = Validator::make($data->all(),[
            'logo' => 'required|image|dimensions:min_width=200,min_height=200,max_width=1024,max_height=1024',
            'name' => 'required|max:255|string',
            'karakter' => 'required|max:255|string',
            'kontinent' => 'required|max:255|string|in:Evropa',
            'drzava' => 'required|max:255|string|in:Bosna i Hercegovina',
            'entitet' => 'required|max:255|string|in:Federacija BiH,Republika Srpska',
            'kanton' => 'required_if:entitet,Federacija BiH|nullable|max:255|string',
            'opcina' => 'required_if:entitet,Federacija BiH|nullable|max:255|string',
            'opcinaSrb' => 'required_if:entitet,Republika Srpska|nullable|max:255|string',
            'regija' => 'required_if:entitet,Republika Srpska|nullable|max:255|string',
            'grad' => 'required|max:255|string',
            'tip' => 'required|max:255|string|in:Sportski klub,Invalidski sportski klub',
            'sport' => 'required_if:tip,Sportski klub|nullable|max:255|string',
            'invalidski_sport' => 'required_if:tip,Invalidski sportski klub|nullable|max:255|string',
            'kategorija' => 'required|max:255|string|in:Muški klub,Ženski klub,Mješovito',
            'godina_osnivanja' => 'nullable|digits:4|integer|min:1800|max:'.date('Y'),
            'teren' => 'nullable|max:255|string',
            'takmicenje' => 'nullable|max:255|string',
            'savez' => 'nullable|max:255|string|in:Državni savez,Entitetski savez,Kantonalni savez',
            'telefon1' => 'nullable|max:50|string',
            'telefon2' => 'nullable|max:50|string',
            'fax' => 'nullable|max:50|string',
            'email' => 'nullable|max:255|email',
            'web_stranica' => 'nullable|max:255|string',
            'adresa' => 'nullable|max:255|string',
            'fb' => 'nullable|max:255|string',
            'instagram' => 'nullable|max:255|string',
            'twitter' => 'nullable|max:255|string',
            'yt' => 'nullable|max:255|string',
            'video' => 'nullable|max:255|string'
        ]);

        if($validator->fails()){
            return redirect('/clubs/'.$id.'/edit')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            if($data->file('logo')){
                $logo = $data->file('logo');
                $newLogoName = time() . '-' . Auth::user()->id . '.' . $logo->getClientOriginalExtension();
                $destinationPath = public_path('/images/club_logo');
                $logo->move($destinationPath, $newLogoName);

                $data['logo'] = $newLogoName;
            } else {
                $data['logo'] = 'default.png';
            }

            DB::table('clubs')->where('id', $id)->update($data->all());

            flash('Uspješno ste editovali Vaš klub.');
            return redirect('/clubs/'.$id.'/edit');
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
        if($data['galerija']){
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
