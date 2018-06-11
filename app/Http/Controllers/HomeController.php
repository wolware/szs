<?php

namespace App\Http\Controllers;

use App\ClubRequest;
use App\Objects;
use App\Repositories\PlayerRepository;
use App\Repositories\StaffRepository;
use App\School;
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
        $sportasi = $this->playerRepository->getAll();
        $klubovi = DB::table('clubs')->limit(6)->orderBy('id', 'desc')->get();
        $vijesti = Vijest::where('izbrisano', 0)->orderBy('id', 'DESC')->take(5)->get();
        $staff = $this->staffRepository->getAll();
        $schools = School::orderBy('id', 'DESC')->take(6)->get();
        $objects = Objects::orderBy('id', 'DESC')->take(6)->get();

        if(Auth::check()) {
            $notifications = ClubRequest::with(['club', 'player', 'staff'])->whereHas('club', function ($query) {
                $query->where('clubs.user_id', Auth::user()->id);
            })->take(5)->get();
        } else {
            $notifications = collect([]);
        }

        return view('welcome', ['sportasi' => $sportasi, 'klubovi' => $klubovi, 'vijesti' => $vijesti, 'staff' => $staff, 'schools' => $schools, 'objects' => $objects, 'notifications' => $notifications]);
    }
    public function contact(){
        return view('contact');
    }
    public function sportsList(){
        return view('sports-list');
    }
}
