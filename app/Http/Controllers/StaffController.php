<?php

namespace App\Http\Controllers;

use App\Language;
use App\Profession;
use App\Repositories\ClubRepository;
use App\Repositories\RegionRepository;
use App\Repositories\SportRepository;
use App\Repositories\StaffRepository;
use App\Staff;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
{
    protected $regionRepository;
    protected $clubRepository;
    protected $staffRepository;

    public function __construct(RegionRepository $regionRepository, ClubRepository $clubRepository, StaffRepository $staffRepository)
    {
        $this->regionRepository = $regionRepository;
        $this->clubRepository = $clubRepository;
        $this->staffRepository = $staffRepository;
    }
    public function index_show()
    {
        $professions = Profession::all();

        $regions = $this->regionRepository
            ->getAll();

        // Algoritam za dobijanje children ids od regija
        $region_ids = [];
        $province_filled = Input::filled('province');
        $region_filled = Input::filled('region');
        $municipality_filled = Input::filled('municipality');

        if($province_filled) {
            if(!$region_filled) {
                $region_ids[] = Input::get('province');
                $province = $this->regionRepository
                    ->getById(Input::get('province'));

                if($province) {
                    foreach ($province->child_regions as $region) {
                        $region_ids[] = $region->id;

                        foreach ($region->child_regions as $municipality) {
                            $region_ids[] = $municipality->id;
                        }
                    }
                }
            } else {
                $region_ids[] = Input::get('region');

                if($municipality_filled) {
                    $region_ids[] = Input::get('municipality');
                } else {
                    $region = $this->regionRepository
                        ->getById(Input::get('region'));

                    if($region) {
                        foreach ($region->child_regions as $region) {
                            $region_ids[] = $region->id;
                        }
                    }
                }
            }
        }

        $query = Staff::query();
        if(Input::filled('profession')){
            $query->where('profession_id', Input::get('profession'));
        }

        if(!empty($region_ids)){
            $query->whereIn('region_id', $region_ids);
        }

        if(Input::filled('sort')){
            $sort = Input::get('sort');
            if($sort === 'name_desc') {
                $query->orderBy('name', 'DESC');
            } else if($sort === 'name_asc') {
                $query->orderBy('name', 'ASC');
            } else if($sort === 'profession') {
                $query->whereHas('profession', function ($query) {
                    $query->orderBy('professions.name', 'DESC');
                });
            }
        }

        $results = $query
            ->paginate(16);

        return view('staff.index', compact('professions', 'regions', 'results'));
    }

    public function displayAddStaff() {

        $scripts[] = '/js/validation/staff-validation.js';
        view()->share('scripts', $scripts);

        $languages = Language::all();
        $professions = Profession::all();

        $regions = $this->regionRepository
            ->getAll();

        $clubs = $this->clubRepository
            ->getAll();

        return view('staff.new', compact('languages', 'regions', 'clubs', 'professions'));
    }

    public function createStaff(Request $request) {

        $validator = Validator::make($request->all(), [
            'avatar' => 'image|dimensions:min_width=512,min_height=512',
            'firstname' => 'required|string|max:255|alpha',
            'lastname' => 'required|string|max:255|alpha',
            'profession' => 'required|integer|exists:professions,id',
            'date_of_birth' => 'nullable|date|before_or_equal:' . Carbon::now()->toDateString(),
            'continent' => 'required|integer|exists:regions,id',
            'country' => 'required|integer|exists:regions,id',
            'province' => 'integer|exists:regions,id',
            'region' => 'integer|exists:regions,id',
            'municipality' => 'integer|exists:regions,id',
            'city' => 'required|max:255|string',
            'facebook' => 'nullable|max:255|string',
            'instagram' => 'nullable|max:255|string',
            'twitter' => 'nullable|max:255|string',
            'youtube' => 'nullable|max:255|string',
            'video' => 'nullable|max:255|string',
            'biography' => 'nullable|string',
            'requested_club' => 'nullable|integer|exists:clubs,id',
            'club_name' => 'nullable|max:255|string',
            'education' => 'nullable|max:255|string',
            'additional_education' => 'nullable|max:255|string',
            'number_of_certificates' => 'nullable|integer',
            'number_of_projects' => 'nullable|integer',
            'work_experience' => 'nullable|numeric',
            // Languages
            'languages' => 'array',
            'languages.*' => 'required|integer|exists:languages,id',
            // History
            'history' => 'array',
            'history.*' => 'array',
            'history.*.season' => 'required|max:255|string',
            'history.*.club' => 'required|max:255|string',
            // Nagrade
            'nagrada' => 'array',
            'nagrada.*' => 'array',
            'nagrada.*.vrsta' => 'required|max:255|string|in:Medalja,Trofej/Pehar,Priznanje,Plaketa',
            'nagrada.*.tip' => 'required|max:255|string|in:Zlato,Srebro,Bronza,Ostalo',
            'nagrada.*.nivo' => 'required|max:255|string|in:Internacionalni nivo,Regionalni nivo,Državni nivo,Entitetski nivo,Drugo',
            'nagrada.*.takmicenje' => 'required|max:255|string',
            'nagrada.*.sezona' => 'required|digits:4|integer|min:1800|max:'.date('Y'),
            'nagrada.*.osvajanja' => 'nullable|integer',
            // Slike
            'galerija' => 'array',
            'galerija.*' => 'required|image',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $createStaff = $this->staffRepository
                ->createStaff($request);

            if($createStaff) {
                flash()->overlay('Uspješno ste dodali sportski kadar.', 'Čestitamo');
                return redirect('/staff/' . $createStaff->id);
            }
        }
    }

    public function showStaff($id){
        $staff = $this->staffRepository
            ->getById($id);

        if($staff) {
            $regions = collect();
            $currentRegion = $staff->region;
            while ($currentRegion) {
                $regions->put(strtolower($currentRegion->region_type->type), $currentRegion->name);

                $currentRegion = $currentRegion->parent_region;
            }

            $staff->setAttribute('regions', $regions);

            $authId = Auth::user() != null ? Auth::user()->id : 0;

            if($staff->user_id != $authId)
                DB::update('update staff set number_of_views = ? where id= ?',[$staff->number_of_views+1, $staff->id]);


            return view('staff.profile', compact('staff'));
        }

        abort(404);
    }

    public function displayEditStaff($id) {
        $languages = Language::all();
        $professions = Profession::all();

        $regions = $this->regionRepository
            ->getAll();

        $clubs = $this->clubRepository
            ->getAll();

        $staff = $this->staffRepository
            ->getById($id);

        if($staff) {
            $clubRegions = collect();
            $currentRegion = $staff->region;
            while ($currentRegion) {
                $clubRegions->put(strtolower($currentRegion->region_type->type), $currentRegion->id);

                $currentRegion = $currentRegion->parent_region;
            }

            $staff->setAttribute('regions', $clubRegions);

            return view('staff.edit', compact('languages', 'regions', 'clubs', 'professions', 'staff'));
        }

        abort(404);
    }

    public function editStaffGeneral($id, Request $request) {
        $staff = $this->staffRepository
            ->getById($id);

        if(!$staff) {
            abort(404);
        }

        // Provjera da li je user napravio kadar
        $isOwner = $staff->user->id == Auth::user()->id;
        if(!$isOwner) {
            abort(404);
        }

        $validator = Validator::make($request->all(), [
            'avatar' => 'image|dimensions:min_width=512,min_height=512',
            'firstname' => 'required|string|max:255|alpha',
            'lastname' => 'required|string|max:255|alpha',
            'profession' => 'required|integer|exists:professions,id',
            'continent' => 'required|integer|exists:regions,id',
            'country' => 'required|integer|exists:regions,id',
            'province' => 'integer|exists:regions,id',
            'region' => 'integer|exists:regions,id',
            'municipality' => 'integer|exists:regions,id',
            'city' => 'required|max:255|string',
            'facebook' => 'nullable|max:255|string',
            'instagram' => 'nullable|max:255|string',
            'twitter' => 'nullable|max:255|string',
            'youtube' => 'nullable|max:255|string',
            'video' => 'nullable|max:255|string'
        ]);

        if($validator->fails()){
            return redirect('/staff/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        } else {

            $updateStaffGeneral = $this->staffRepository
                ->updateGeneral($request, $staff);

            if($updateStaffGeneral) {
                flash()->overlay('Uspješno ste izmjenili "Općenito" sekciju sportskog kadra.', 'Čestitamo');
                return back();
            }
        }

    }

    public function editStaffStatus($id, Request $request) {
        $staff = $this->staffRepository
            ->getById($id);

        if(!$staff) {
            abort(404);
        }

        // Provjera da li je user napravio kadar
        $isOwner = $staff->user->id == Auth::user()->id;
        if(!$isOwner) {
            abort(404);
        }

        $validator = Validator::make($request->all(), [
            'date_of_birth' => 'nullable|date|before_or_equal:' . Carbon::now()->toDateString(),
            'requested_club' => 'nullable|integer|exists:clubs,id',
            'club_name' => 'nullable|max:255|string',
            'education' => 'nullable|max:255|string',
            'additional_education' => 'nullable|max:255|string',
            'number_of_certificates' => 'nullable|integer',
            'number_of_projects' => 'nullable|integer',
            'work_experience' => 'nullable|numeric',
            // Languages
            'languages' => 'array',
            'languages.*' => 'required|integer|exists:languages,id',
            // History
            'history' => 'array',
            'history.*' => 'array',
            'history.*.season' => 'required|max:255|string',
            'history.*.club' => 'required|max:255|string',
        ]);

        if($validator->fails()){
            return redirect('/staff/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        } else {

            $updatePlayerStatus = $this->staffRepository
                ->updateStatus($request, $staff);

            if($updatePlayerStatus) {
                flash()->overlay('Uspješno ste izmjenili predispozicije sportskog kadra.', 'Čestitamo');
                return back();
            }
        }
    }

    public function editStaffBiography($id, Request $request) {
        $staff = $this->staffRepository
            ->getById($id);

        if(!$staff) {
            abort(404);
        }

        // Provjera da li je user napravio kadar
        $isOwner = $staff->user->id == Auth::user()->id;
        if(!$isOwner) {
            abort(404);
        }

        $validator = Validator::make($request->all(), [
            'biography' => 'nullable|string'
        ]);

        if($validator->fails()){
            return redirect('/staff/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        } else {

            $updateStaffBiography = $this->staffRepository
                ->updateBiography($request, $staff);

            if($updateStaffBiography) {
                flash()->overlay('Uspješno ste izmjenili biografiju sportskog kadra.', 'Čestitamo');
                return back();
            }
        }
    }

    public function editStaffTrophies($id, Request $request) {
        $staff = $this->staffRepository
            ->getById($id);

        if(!$staff) {
            abort(404);
        }

        // Provjera da li je user napravio kadar
        $isOwner = $staff->user->id == Auth::user()->id;
        if(!$isOwner) {
            abort(404);
        }

        $validator = Validator::make($request->all(), [
            'nagrada' => 'array',
            'nagrada.*' => 'array',
            'nagrada.*.vrsta' => 'required|max:255|string|in:Medalja,Trofej/Pehar,Priznanje,Plaketa',
            'nagrada.*.tip' => 'required|max:255|string|in:Zlato,Srebro,Bronza,Ostalo',
            'nagrada.*.nivo' => 'required|max:255|string|in:Internacionalni nivo,Regionalni nivo,Državni nivo,Entitetski nivo,Drugo',
            'nagrada.*.takmicenje' => 'required|max:255|string',
            'nagrada.*.sezona' => 'required|digits:4|integer|min:1800|max:'.date('Y'),
            'nagrada.*.osvajanja' => 'nullable|integer',
        ]);

        if($validator->fails()){
            return redirect('/staff/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        } else {

            $updateStaffTrophies = $this->staffRepository
                ->updateTrophies($request, $staff);

            if($updateStaffTrophies) {
                flash()->overlay('Uspješno ste izmjenili trofeje/nagrade sportskog kadra.', 'Čestitamo');
                return back();
            }
        }
    }

    public function editStaffGallery($id, Request $request) {
        $staff = $this->staffRepository
            ->getById($id);

        if(!$staff) {
            abort(404);
        }

        // Provjera da li je user napravio kadar
        $isOwner = $staff->user->id == Auth::user()->id;
        if(!$isOwner) {
            abort(404);
        }

        $validator = Validator::make($request->all(), [
            'galerija' => 'array',
            'galerija.*' => 'required|image'
        ]);

        if($validator->fails()){
            return redirect('/staff/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        } else {

            $updateStaffGallery = $this->staffRepository
                ->updateGallery($request, $staff);

            if($updateStaffGallery) {
                flash()->overlay('Uspješno ste izmjenili galeriju sportskog kadra.', 'Čestitamo');
                return back();
            }
        }
    }
}
