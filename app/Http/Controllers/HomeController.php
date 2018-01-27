<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sportasi = DB::table('fudbaler')->limit(6)->orderBy('id', 'desc')->get();
        $klubovi = DB::table('clubs')->limit(6)->orderBy('id', 'desc')->get();
        return view('welcome', ['sportasi' => $sportasi, 'klubovi' => $klubovi]);
    }
}
