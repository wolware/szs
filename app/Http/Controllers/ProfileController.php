<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use App\User;
use App\Club;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile_profiles(){
        $clubs = DB::table('clubs')->where('user_id', Auth::user()->id)->get();

        $aktivnih = DB::table('clubs')->where('user_id', Auth::user()->id)->where('status', '1')->count();
        $cekanje = DB::table('clubs')->where('user_id', Auth::user()->id)->where('status', '0')->count();
        $odbijenih = DB::table('clubs')->where('user_id', Auth::user()->id)->where('status', '2')->count();
        $uklonjenih = DB::table('clubs')->where('user_id', Auth::user()->id)->where('status', '3')->count();


        

        return view('profile.profiles', ['clubs' => $clubs, 'aktivnih' => $aktivnih, 'cekanje' => $cekanje, 'odbijenih' => $odbijenih, 'uklonjenih' => $uklonjenih]);
    }
}
