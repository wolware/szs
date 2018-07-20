<?php

namespace App\Http\Controllers;

use App\Club;
use App\ClubRequest;
use App\Objects;
use App\Player;
use App\Repositories\PlayerRepository;
use App\Repositories\StaffRepository;
use App\School;
use App\Staff;
use App\Vijest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    protected $playerRepository;
    protected $staffRepository;

    /**
     * Create a new controller instance.
     *
     * @param PlayerRepository $playerRepository
     * @param StaffRepository $staffRepository
     */
    public function __construct(PlayerRepository $playerRepository, StaffRepository $staffRepository) {
        $this->playerRepository = $playerRepository;
        $this->staffRepository = $staffRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sportasi =  Player::where('status', 'active')->orderBy('id', 'desc')->take(6)->get();
        $klubovi = Club::where('status', 'active')->orderBy('id', 'desc')->take(6)->get();
        $vijesti = Vijest::where('izbrisano', false)->where('odobreno', true)->orderBy('id', 'DESC')->take(6)->get();
        $staff =  Staff::where('status', 'active')->orderBy('id', 'desc')->take(6)->get();
        $schools = School::where('status', 'active')->orderBy('id', 'desc')->take(6)->get();
        $objects = Objects::where('status', 'active')->orderBy('id', 'desc')->take(6)->get();

        $approvedPlayers = Player::where('status', 'active')->get()->count();
        $approvedObjects = Objects::where('status', 'active')->get()->count();
        $approvedClubs = Club::where('status', 'active')->get()->count();
        $approvedSchools = School::where('status', 'active')->get()->count();
        $approvedStaff = Staff::where('status', 'active')->get()->count();
        $approvedNews = Vijest::where('izbrisano', false)->where('odobreno', true)->get()->count();

        $statistics = [
            'players' => $approvedPlayers,
            'objects' => $approvedObjects,
            'clubs' => $approvedClubs,
            'schools' => $approvedSchools,
            'staff' => $approvedStaff,
            'news' => $approvedNews
        ];

        $statistics = json_decode(json_encode($statistics), FALSE);

        $newPlayer = Player::where('status', 'active')->orderBy('id', 'desc')->first();
        $newClub = Club::where('status', 'active')->orderBy('id', 'desc')->first();
        $newStaff = Staff::where('status', 'active')->orderBy('id', 'desc')->first();
        $newObject = Objects::with(['type'])->where('status', 'active')->orderBy('id', 'desc')->first();

        $newProfiles = [
            'player' => $newPlayer,
            'club' => $newClub,
            'staff' => $newStaff,
            'object' => $newObject
        ];

        $newProfiles = json_decode(json_encode($newProfiles), FALSE);

        if(Auth::check()) {
            $notifications = ClubRequest::with(['club', 'player', 'staff'])->whereHas('club', function ($query) {
                $query->where('clubs.user_id', Auth::user()->id);
            })->take(5)->get();
        } else {
            $notifications = collect([]);
        }

        return view('welcome', [
            'sportasi' => $sportasi,
            'klubovi' => $klubovi,
            'vijesti' => $vijesti,
            'staff' => $staff,
            'schools' => $schools,
            'objects' => $objects,
            'notifications' => $notifications,
            'statistics' => $statistics,
            'newProfiles' => $newProfiles
        ]);
    }

    public function contact(){
        return view('contact');
    }

    public function sportsList(){
        return view('sports-list');
    }
}
