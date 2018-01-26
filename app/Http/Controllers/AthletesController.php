<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AthletesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function athletes_add()
    {
        return view('athlete.add');
    }
}
