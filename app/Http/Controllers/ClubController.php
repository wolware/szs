<?php

namespace App\Http\Controllers;

use App\ClubStaff;
use App\Gallery;
use App\History;
use App\Repositories\AssociationRepository;
use App\Repositories\ClubRepository;
use App\Repositories\RegionRepository;
use App\Repositories\SportRepository;
use App\Trophy;
use Carbon\Carbon;
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
    protected $associationRepository;

    /**
     * Create a new controller instance.
     *
     * @param RegionRepository $regionRepository
     * @param SportRepository $sportRepository
     * @param ClubRepository $clubRepository
     * @param AssociationRepository $associationRepository
     */
    public function __construct(RegionRepository $regionRepository, SportRepository $sportRepository, ClubRepository $clubRepository, AssociationRepository $associationRepository)
    {
        $this->middleware('auth')->except(['club_show', 'index_show']);
        $this->regionRepository = $regionRepository;
        $this->sportRepository = $sportRepository;
        $this->clubRepository = $clubRepository;
        $this->associationRepository = $associationRepository;
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
        $associations = $this->associationRepository->getAll();

        return view('clubs.new', compact('regions', 'sports', 'clubCategories', 'associations'));
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
        $club = Club::with(['histories','trophies','club_staff','images','creator','association','region'])
            ->where('id', $id)
            ->first();

        if($club) {
            $regions = collect();
            $currentRegion = $club->region;
            while ($currentRegion) {
                $regions->put(strtolower($currentRegion->region_type->type), $currentRegion->name);

                $currentRegion = $currentRegion->parent_region;
            }

            $club->setAttribute('regions', $regions);
            return view('clubs.profile', compact('club'));
        }

        abort(404);
    }

    public function new(Request $data){
    	$validator = Validator::make($data->all(),[
    	    'logo' => 'required|image|dimensions:min_width=200,min_height=200,max_width=1024,max_height=1024',
    		'name' => 'required|max:255|string',
    		'nature' => 'required|max:255|string',
    		'continent' => 'required|integer|exists:regions,id',
    		'country' => 'required|integer|exists:regions,id',
    		'province' => 'integer|exists:regions,id',
    		'region' => 'integer|exists:regions,id',
    		'municipality' => 'integer|exists:regions,id',
    		'city' => 'required|max:255|string',
    		'type' => 'required|integer',
    		'sport' => 'required|integer|exists:sports,id',
    		'category' => 'required|integer|exists:club_categories,id',
    		'established_in' => 'nullable|digits:4|integer|min:1800|max:'.date('Y'),
    		'home_field' => 'nullable|max:255|string',
    		'competition' => 'nullable|max:255|string',
    		'association' => 'nullable|integer|exists:associations,id',
    		'phone_1' => 'nullable|max:50|string',
            'phone_2' => 'nullable|max:50|string',
            'fax' => 'nullable|max:50|string',
            'email' => 'nullable|max:255|email',
            'website' => 'nullable|max:255|string',
    		'address' => 'nullable|max:255|string',
            'facebook' => 'nullable|max:255|string',
            'instagram' => 'nullable|max:255|string',
            'twitter' => 'nullable|max:255|string',
            'youtube' => 'nullable|max:255|string',
            'video' => 'nullable|max:255|string',
            'history' => 'nullable|string',
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

    	if ($validator->fails()) {
    		return redirect('clubs/new')
    					->withErrors($validator)
    					->withInput();
    	} else {
    		if($data->file('logo')){
    			$logo = $data->file('logo');
    			$newLogoName = time() . '-' . Auth::user()->id . '.' . $logo->getClientOriginalExtension();
    			$destinationPath = public_path('/images/club_logo');
    			$logo->move($destinationPath, $newLogoName);
    		} else {
                $newLogoName = 'default.png';
            }
            // Provjeri najmanji level regije
            $region_id = $data->get('country');

    		if($data->has('province')) {
    		    $region_id = $data->get('province');
            }

            if($data->has('region')) {
                $region_id = $data->get('region');
            }

            if($data->has('municipality')) {
                $region_id = $data->get('municipality');
            }

            $club_id = Club::insertGetId([
                'logo' => $newLogoName,
                'name' => $data->get('name'),
                'nature' => $data->get('nature'),
                'city' => $data->get('city'),
                'established_in' => $data->get('established_in'),
                'home_field' => $data->get('home_field'),
                'competition' => $data->get('competition'),
                'phone_1' => $data->get('phone_1'),
                'phone_2' => $data->get('phone_2'),
                'fax' => $data->get('fax'),
                'email' => $data->get('email'),
                'website' => $data->get('website'),
                'address' => $data->get('address'),
                'facebook' => $data->get('facebook'),
                'twitter' => $data->get('twitter'),
                'instagram' => $data->get('instagram'),
                'youtube' => $data->get('youtube'),
                'video' => $data->get('video'),
                'association_id' => $data->get('association'),
                'club_category_id' => $data->get('category'),
                'sport_id' => $data->get('sport'),
                'region_id' => $region_id,
                'user_id' => Auth::user()->id,
                'created_at' => new Carbon(),
                'updated_at' => new Carbon(),
            ]);

    		if(!empty($club_id)){
                if($data->filled('history')){
                    History::create([
                        'content' => $data->get('history'),
                        'club_id' => $club_id
                    ]);
                }

                if($data->filled('nagrada')){
                    foreach($data->get('nagrada') as $key => $nagrada){
                        if($nagrada){
                            Trophy::create([
                                'type' => $data['nagrada'][$key]['vrsta'],
                                'place' => $data['nagrada'][$key]['tip'],
                                'competition_name' => $data['nagrada'][$key]['takmicenje'],
                                'level_of_competition' =>  $data['nagrada'][$key]['nivo'],
                                'season' =>  $data['nagrada'][$key]['sezona'],
                                'club_id' => $club_id
                            ]);
                        }
                    }
                }

                if($data->filled('licnost')){
                    foreach($data->get('licnost') as $key => $licnost){
                        if($licnost){
                            $logo = array_key_exists('avatar', $data['licnost'][$key]) ? $data['licnost'][$key]['avatar'] : null;

                            if($logo) {
                                $newavatarlicnostiName = time() . '-' . $club_id . '.' . $logo->getClientOriginalExtension();
                                $destPath = public_path('/images/avatar_licnost');
                                $logo->move($destPath, $newavatarlicnostiName);
                            } else {
                                $newavatarlicnostiName = 'default_avatar.png';
                            }

                            ClubStaff::create([
                                'avatar' => $newavatarlicnostiName,
                                'firstname' => $data['licnost'][$key]['ime'],
                                'lastname' => $data['licnost'][$key]['prezime'],
                                'biography' => $data['licnost'][$key]['opis'] ? $data['licnost'][$key]['opis'] : null,
                                'club_id' => $club_id
                            ]);
                        }
                    }
                }

                if($data->file('galerija')){
                    $galerije = $data->file('galerija');
                    foreach($galerije as $key => $slika){
                        $newgalName = $key . '-' .time() . '-' .  $club_id . '.' . $slika->getClientOriginalExtension();
                        $destPath = public_path('/images/galerija_klub');
                        $slika->move($destPath, $newgalName);

                        Gallery::create([
                            'image' => $newgalName,
                            'club_id' => $club_id
                        ]);
                    }
                }

                return redirect('/clubs/' . $club_id . '/edit');
            }

    	}

        return redirect('/clubs/new');
    }

    public function edit_club_show($id){

        $regions = $this->regionRepository->getAll();
        $sports = $this->sportRepository->getAll();
        $clubCategories = $this->clubRepository->getSportCategories();
        $associations = $this->associationRepository->getAll();

        $club = Club::with(['histories','trophies','club_staff','images','creator','association','region','category','association'])
            ->where('id', $id)
            ->first();

        if($club) {
            $clubRegions = collect();
            $currentRegion = $club->region;
            while ($currentRegion) {
                $clubRegions->put(strtolower($currentRegion->region_type->type), $currentRegion->id);

                $currentRegion = $currentRegion->parent_region;
            }

            $club->setAttribute('regions', $clubRegions);
            return view('clubs.edit', compact('club', 'regions', 'sports', 'clubCategories', 'associations'));
        }

        abort(404);

    }

    public function edit_club(Request $data, $id){
        // Provjera da li je user vlasnik kluba
        $isOwner = Club::where('id', $id)->where('user_id', Auth::user()->id)->first();
        if(!$isOwner) {
            abort(404);
        }

        $validator = Validator::make($data->all(),[
            'logo' => 'required|image|dimensions:min_width=200,min_height=200,max_width=1024,max_height=1024',
            'name' => 'required|max:255|string',
            'nature' => 'required|max:255|string',
            'continent' => 'required|integer|exists:regions,id',
            'country' => 'required|integer|exists:regions,id',
            'province' => 'integer|exists:regions,id',
            'region' => 'integer|exists:regions,id',
            'municipality' => 'integer|exists:regions,id',
            'city' => 'required|max:255|string',
            'type' => 'required|integer',
            'sport' => 'required|integer|exists:sports,id',
            'category' => 'required|integer|exists:club_categories,id',
            'established_in' => 'nullable|digits:4|integer|min:1800|max:'.date('Y'),
            'home_field' => 'nullable|max:255|string',
            'competition' => 'nullable|max:255|string',
            'association' => 'nullable|integer|exists:associations,id',
            'phone_1' => 'nullable|max:50|string',
            'phone_2' => 'nullable|max:50|string',
            'fax' => 'nullable|max:50|string',
            'email' => 'nullable|max:255|email',
            'website' => 'nullable|max:255|string',
            'address' => 'nullable|max:255|string',
            'facebook' => 'nullable|max:255|string',
            'instagram' => 'nullable|max:255|string',
            'twitter' => 'nullable|max:255|string',
            'youtube' => 'nullable|max:255|string',
            'video' => 'nullable|max:255|string'
        ]);

        if($validator->fails()){
            return redirect('/clubs/' . $id . '/edit')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            // Provjeri najmanji level regije
            $region_id = $data->get('country');

            if($data->has('province')) {
                $region_id = $data->get('province');
            }

            if($data->has('region')) {
                $region_id = $data->get('region');
            }

            if($data->has('municipality')) {
                $region_id = $data->get('municipality');
            }

            $fieldsToUpdate = [
                'name' => $data->get('name'),
                'nature' => $data->get('nature'),
                'city' => $data->get('city'),
                'established_in' => $data->get('established_in'),
                'home_field' => $data->get('home_field'),
                'competition' => $data->get('competition'),
                'phone_1' => $data->get('phone_1'),
                'phone_2' => $data->get('phone_2'),
                'fax' => $data->get('fax'),
                'email' => $data->get('email'),
                'website' => $data->get('website'),
                'address' => $data->get('address'),
                'facebook' => $data->get('facebook'),
                'twitter' => $data->get('twitter'),
                'instagram' => $data->get('instagram'),
                'youtube' => $data->get('youtube'),
                'video' => $data->get('video'),
                'association_id' => $data->get('association'),
                'club_category_id' => $data->get('category'),
                'sport_id' => $data->get('sport'),
                'region_id' => $region_id,
                'updated_at' => new Carbon(),
            ];

            if($data->file('logo')){
                $logo = $data->file('logo');
                $newLogoName = time() . '-' . Auth::user()->id . '.' . $logo->getClientOriginalExtension();
                $destinationPath = public_path('/images/club_logo');
                $logo->move($destinationPath, $newLogoName);

                $fieldsToUpdate['logo'] = $newLogoName;
            }

            $updateClub = Club::where('id', $id)
                ->update($fieldsToUpdate);

            if($updateClub) {
                flash()->overlay('Uspješno ste editovali "Općenito" sekciju kluba.', 'Čestitamo');
                return redirect('/clubs/' . $id . '/edit');
            }

            abort(404);
        }
    }

    public function edit_licnost(Request $data, $id){

        // Provjera da li je user vlasnik kluba
        $isOwner = Club::where('id', $id)->where('user_id', Auth::user()->id)->first();
        if(!$isOwner) {
            abort(404);
        }


        $validator = Validator::make($data->all(), [
            'licnost' => 'array',
            'licnost.*' => 'array',
            'licnost.*.avatar' => 'image|dimensions:min_width=312,min_height=250,max_width=1920,max_height=1080',
            'licnost.*.ime' => 'required|max:255|string',
            'licnost.*.prezime' => 'required|max:255|string',
            'licnost.*.opis' => 'nullable|max:1000|string',
        ]);

        if($validator->fails()){
            return redirect('clubs/' . $id . '/edit')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            $oldIds = [];

            if($data->filled('licnost')){
                foreach($data->get('licnost') as $key => $licnost){
                    if($licnost){
                        $logo = array_key_exists('avatar', $data['licnost'][$key]) ? $data['licnost'][$key]['avatar'] : null;
                        $newavatarlicnostiName = null;
                        // Ako nema id dodaj licnost
                        if(!array_key_exists('id', $licnost)) {
                            if ($logo) {
                                $newavatarlicnostiName = time() . '-' . $id . '.' . $logo->getClientOriginalExtension();
                                $destPath = public_path('/images/avatar_licnost');
                                $logo->move($destPath, $newavatarlicnostiName);
                            } else {
                                $newavatarlicnostiName = 'default_avatar.png';
                            }

                            $new_licnost = ClubStaff::create([
                                'avatar' => $newavatarlicnostiName,
                                'firstname' => $data['licnost'][$key]['ime'],
                                'lastname' => $data['licnost'][$key]['prezime'],
                                'biography' => $data['licnost'][$key]['opis'] ? $data['licnost'][$key]['opis'] : null,
                                'club_id' => $id
                            ]);

                            $oldIds[] = $new_licnost->id;
                        } else {
                            $old_licnost = ClubStaff::where('id', $licnost['id'])->where('club_id', $id)->first();

                            if($old_licnost) {
                                $oldIds[] = $old_licnost->id;

                                $fieldsToUpdate = [
                                    'firstname' => $data['licnost'][$key]['ime'],
                                    'lastname' => $data['licnost'][$key]['prezime'],
                                    'biography' => $data['licnost'][$key]['opis'] ? $data['licnost'][$key]['opis'] : null,
                                ];

                                if ($logo) {
                                    $newavatarlicnostiName = time() . '-' . $id . '.' . $logo->getClientOriginalExtension();
                                    $destPath = public_path('/images/avatar_licnost');
                                    $logo->move($destPath, $newavatarlicnostiName);

                                    $fieldsToUpdate['avatar'] = $newavatarlicnostiName;
                                }

                                $old_licnost->update($fieldsToUpdate);
                            }
                        }
                    }
                }

                // Izbriši licnosti koje je user izbrisao
                ClubStaff::where('club_id', $id)
                    ->whereNotIn('id', $oldIds)
                    ->delete();

                flash()->overlay('Uspješno ste editovali istaknute ličnosti kluba.', 'Čestitamo');
                return redirect('clubs/' . $id . '/edit');
            }
        }
    }

    public function edit_vremeplov(Request $data, $id){

        // Provjera da li je user vlasnik kluba
        $history = History::where('id', $id)->first();
        $isOwner = Club::where('id', $history->club_id)->where('user_id', Auth::user()->id)->first();
        if(!$isOwner) {
            abort(404);
        }

        $validator = Validator::make($data->all(),[
            'history' => 'nullable|string',
        ]);

        if($validator->fails()){
            return redirect('clubs/' . $history->club_id . '/edit')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $updateHistory = $history
                ->update([
                    'content' => $data->history
                ]);

            if($updateHistory) {
                flash()->overlay('Uspješno ste editovali historiju kluba.', 'Čestitamo');
                return redirect('clubs/' . $history->club_id . '/edit');
            }
        }
    }

    public function edit_trofej(Request $data, $id){
        // Provjera da li je user vlasnik kluba
        $isOwner = Club::where('id', $id)->where('user_id', Auth::user()->id)->first();
        if(!$isOwner) {
            abort(404);
        }

        $validator = Validator::make($data->all(),[
            'nagrada' => 'array',
            'nagrada.*' => 'array',
            'nagrada.*.vrsta' => 'required|max:255|string|in:Medalja,Trofej/Pehar,Priznanje,Plaketa',
            'nagrada.*.tip' => 'required|max:255|string|in:Zlato,Srebro,Bronza,Ostalo',
            'nagrada.*.nivo' => 'required|max:255|string|in:Internacionalni nivo,Regionalni nivo,Državni nivo,Entitetski nivo,Drugo',
            'nagrada.*.takmicenje' => 'required|max:255|string',
            'nagrada.*.sezona' => 'required|max:9|string',
            'nagrada.*.osvajanja' => 'nullable|integer',
        ]);

        if($validator->fails()){
            return redirect('clubs/' . $id . '/edit')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            $oldIds = [];

            if($data->filled('nagrada')){
                foreach($data->get('nagrada') as $key => $nagrada){
                    if($nagrada){
                        if(!array_key_exists('id', $nagrada)) {
                            $new_nagrada = Trophy::create([
                                'type' => $data['nagrada'][$key]['vrsta'],
                                'place' => $data['nagrada'][$key]['tip'],
                                'competition_name' => $data['nagrada'][$key]['takmicenje'],
                                'level_of_competition' =>  $data['nagrada'][$key]['nivo'],
                                'season' =>  $data['nagrada'][$key]['sezona'],
                                'club_id' => $id
                            ]);

                            $oldIds[] = $new_nagrada->id;
                        } else {
                            $old_nagrada = Trophy::where('id', $nagrada['id'])->where('club_id', $id)->first();

                            if($old_nagrada) {
                                $oldIds[] = $old_nagrada->id;

                                $old_nagrada->update([
                                    'type' => $data['nagrada'][$key]['vrsta'],
                                    'place' => $data['nagrada'][$key]['tip'],
                                    'competition_name' => $data['nagrada'][$key]['takmicenje'],
                                    'level_of_competition' =>  $data['nagrada'][$key]['nivo'],
                                    'season' =>  $data['nagrada'][$key]['sezona'],
                                ]);
                            }
                        }
                    }
                }

                // Izbriši trofeje koje je user izbrisao
                Trophy::where('club_id', $id)
                    ->whereNotIn('id', $oldIds)
                    ->delete();

                flash()->overlay('Uspješno ste editovali nagrade/trofeje kluba.', 'Čestitamo');
                return redirect('clubs/' . $id . '/edit');
            }
        }
    }

    public function edit_galerija(Request $data, $id){
        // Provjera da li je user vlasnik kluba
        $isOwner = Club::where('id', $id)->where('user_id', Auth::user()->id)->first();
        if(!$isOwner) {
            abort(404);
        }

        $validator = Validator::make($data->all(),[
            'galerija' => 'array',
            'galerija.*' => 'required|image',
        ]);

        if ($validator->fails()) {
            return redirect('clubs/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        } else {
            if($data->file('galerija')){
                $galerije = $data->file('galerija');
                foreach($galerije as $key => $slika){
                    $newgalName = $key . '-' .time() . '-' .  $id . '.' . $slika->getClientOriginalExtension();
                    $destPath = public_path('/images/galerija_klub');
                    $slika->move($destPath, $newgalName);

                    Gallery::create([
                        'image' => $newgalName,
                        'club_id' => $id
                    ]);
                }
            }

            flash()->overlay('Uspješno ste editovali galeriju kluba.', 'Čestitamo');
            return redirect('clubs/' . $id . '/edit');
        }
    }
}
