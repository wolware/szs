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

        $clubs = Auth::user()->clubs;
        $school = Auth::user()->schools;
        $players = Auth::user()->players;
        $objects = Auth::user()->objects;
        $staff = Auth::user()->staff;

        $aktivnih = $clubs->where('status', 'active')->count()
            + $school->where('status', 'active')->count()
            + $players->where('status', 'active')->count()
            + $objects->where('status', 'active')->count()
            + $staff->where('status', 'active')->count();

        $cekanje = $clubs->where('status', 'waiting')->count()
            + $school->where('status', 'waiting')->count()
            + $players->where('status', 'waiting')->count()
            + $objects->where('status', 'waiting')->count()
            + $staff->where('status', 'waiting')->count();

        $odbijenih = $clubs->where('status', 'refused')->count()
            + $school->where('status', 'refused')->count()
            + $players->where('status', 'refused')->count()
            + $objects->where('status', 'refused')->count()
            + $staff->where('status', 'refused')->count();

        $uklonjenih = $clubs->where('status', 'deleted')->count()
            + $school->where('status', 'deleted')->count()
            + $players->where('status', 'deleted')->count()
            + $objects->where('status', 'deleted')->count()
            + $staff->where('status', 'deleted')->count();

        return view('profile.profiles', [
            'aktivnih' => $aktivnih,
            'cekanje' => $cekanje,
            'odbijenih' => $odbijenih,
            'uklonjenih' => $uklonjenih
        ]);
    }

    public function profile_me(){

        $clubs = Auth::user()->clubs;
        $school = Auth::user()->schools;
        $players = Auth::user()->players;
        $objects = Auth::user()->objects;
        $staff = Auth::user()->staff;
        $news = Auth::user()->vijesti;

        $active = [
            'clubs' => $clubs->where('status', 'active')->count(),
            'schools' => $school->where('status', 'active')->count(),
            'players' => $players->where('status', 'active')->count(),
            'objects' => $objects->where('status', 'active')->count(),
            'staff' => $staff->where('status', 'active')->count(),
            'news' => $news->where('izbrisano', 0)->where('odobreno', 1)->count()
        ];

        $active = json_decode(json_encode($active), FALSE);

        $vijesti = Auth::user()->vijesti()->with(['kategorija'])->where('izbrisano', 0)->where('odobreno', 1)->orderBy('id', 'DESC')->take(3)->get();

        return view('profile.me', compact('active', 'vijesti'));
    }

    public function profile_news() {

        $vijesti = Auth::user()->vijesti()->with(['kategorija'])->where('izbrisano', 0)->where('odobreno', 1)->orderBy('id', 'DESC')->paginate(5);

        return view('profile.news', compact('vijesti'));
    }
}
