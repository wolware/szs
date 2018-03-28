<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AthletesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index_show']);
    }

    public function athletes_add()
    {
        return view('athlete.add');
    }
    public function index_show(Request $data){
        /*
         * TODO napravi queryje za izlistavanje sportista jer ne mogu bazu gledat sad
        */
        /*$q = DB::table('clubs');
        if(Input::has('kategorija')){
            $q->where('kategorija', Input::get('kategorija'));
        }
        if(Input::has('tip')){
            $q->where('tip', Input::get('tip'));
        }
        if(Input::has('sport')){
            $q->where('sport', Input::get('sport'));
        }
        if(Input::has('entitet')){
            $q->where('entitet', Input::get('entitet'));
        }
        if(Input::has('kanton')){
            $q->where('kanton', Input::get('kanton'));
        }
        if(Input::has('opcina')){
            $q->where('opcina', Input::get('opcina'));
        }


        $data = $q->get();
        */
        return view('athlete.index', ['data' => $data]);
    }

}
