<?php

namespace App\Http\Controllers;

use App\Language;
use App\Profession;
use App\Repositories\ClubRepository;
use App\Repositories\RegionRepository;
use App\Repositories\SportRepository;
use App\Repositories\StaffRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        return view('staff.index');
    }

    public function displayAddStaff() {
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
            'avatar' => 'image|dimensions:min_width=512,min_height=512,max_width=2048,max_height=2048',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'profession' => 'required|integer|exists:professions,id',
            'date_of_birth' => 'nullable|date',
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
            'nagrada.*.sezona' => 'required|max:9|string',
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
            'avatar' => 'image|dimensions:min_width=512,min_height=512,max_width=2048,max_height=2048',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
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
            'date_of_birth' => 'nullable|date',
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
            'nagrada.*.sezona' => 'required|max:9|string',
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
