<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function objects_add()
    {
        return view('objects.add');
    }
}
