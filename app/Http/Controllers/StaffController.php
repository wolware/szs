<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index_show']);
    }
    public function index_show()
    {
        return view('staff.index');
    }
}
