<?php

namespace App\Http\Controllers;

use App\Repositories\PlayerRepository;
use App\Vijest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    protected $playerRepository;

    /**
     * Create a new controller instance.
     *
     * @param PlayerRepository $playerRepository
     */
    public function __construct(PlayerRepository $playerRepository) {
        $this->playerRepository = $playerRepository;
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
        $vijesti = Vijest::where('odobreno', 1)->where('izbrisano', 0)->orderBy('id', 'DESC')->take(5)->get();

        return view('welcome', ['sportasi' => $sportasi, 'klubovi' => $klubovi, 'vijesti' => $vijesti]);
    }
}
