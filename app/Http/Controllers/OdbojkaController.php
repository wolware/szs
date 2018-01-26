<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Club;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class OdbojkaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('athlete.volleyball.new');
    }


    public function new(Request $data){
        $messages = [
            'required' => ':attribute polje je obavezno.',
            'max' => ':attribute mora imati manje karaktera od :max',
            'min' => ':attribute mora imati više karaktera od :min',
            'confirmed' => ':attribute se ne podudara.',
            'integer' => ':attribute mora biti broj',
        ];
       $validator = Validator::make($data->all(),[
            'ime' => 'required|max:255|string',
            'prezime' => 'required|max:255|string',
            'karakter' => 'required|max:255|string',
            'kontinent' => 'required|max:255|string',
            'drzava' => 'required|max:255|string',
            'entitet' => 'required',
            'kanton' => 'required',
            'opcina' => 'required',
            'grad' => 'required',
            /*'klub' => 'required',
            'visina' => 'required',
            'tezina' => 'required'*/
        ], $messages);
        if($validator->fails()){
            return redirect('athlete/volleyball/new')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $newLogoName = '';
            if($data->file('avatar')){
                $avatar = $data->file('avatar');
                $newLogoName = time() . rand(111,999) . '.' . $avatar->getClientOriginalExtension();
                $destinationPath = public_path('/images/athlete_avatars');
                $avatar->move($destinationPath, $newLogoName);

                $data['avatar'] = $newLogoName;
            }else{
                $data['avatar'] = 'default.png';
            }
            $id = DB::table('volleyball')->insertGetId([
                'avatar' => $newLogoName,
                'ime' => $data['ime'],
                'prezime' => $data['prezime'],
                'karakter' => $data['karakter'],
                'kontinent' => $data['kontinent'],
                'drzava' => $data['drzava'],
                'entitet' => $data['entitet'],
                'opcina' => $data['opcina'],
                'kanton' => $data['kanton'],
                'grad' => $data['grad'],
                'fb' => $data['fb'],
                'instagram' => $data['instagram'],
                'youtube' => $data['youtube'],
                'video' => $data['video'],
                'dob' => $data['dob'],
                'klub' => $data['klub'],
                'takmicenje' => $data['takmicenje'],
                'visina' => $data['visina'],
                'tezina' => $data['tezina'],
                'ekstremitet' => $data['ekstremitet'],
                'pozicija' => $data['pozicija'],
                'agent' => $data['agent'],
             ]);

            if(!empty($data['content'])){
                DB::table('biografija')->insert([
                    'content' => $data['content'],
                    'sportista' => 'volleyball',
                    'sportista_id' => $id
                ]);
            }

            if(!empty($data['naziv_takmicenja'][0])){
                foreach($data['naziv_takmicenja'] as $key=>$t_t){
                   if(!empty($t_t)){
                         DB::table('sportista_trofej')->insert([
                            'vrsta_nagrade' => $data['vrsta_nagrade'][$key],
                            'tip_nagrade' => $data['tip_nagrade'][$key],
                            'naziv_takmicenja' => $data['naziv_takmicenja'][$key],
                            'nivo_takmicenja' => $data['nivo_takmicenja'][$key],
                            'sezona' => $data['trofej_sezona'][$key],
                            'osvajanja' => $data['trofej_osvajanja'][$key],
                            'sportista' => 'volleyball',
                            'sportista_id' => $id
                        ]);
                     }else{
                        continue;
                     }
                }
            }

            if(!empty($data['klub_kh'][0])){
                foreach($data['klub_kh'] as $key=>$k_k){
                    if(!empty($k_k)){
                        DB::table('klupska_historija')->insert([
                            'sezona' => $data['sezona_kh'][$key],
                            'klub' => $data['klub_kh'][$key],
                            'sportista' => 'volleyball',
                            'sportista_id' => $id
                        ]);
                    }else{
                        continue;
                     }
                }
            }

            /*if($data->hasFile('avatar_licnost')){
                $avatar_licnosti = $data->file('avatar_licnost');
                foreach($avatar_licnosti as $key=>$a_l){
                    if(!empty($data['licnost_ime'][$key]) || $data['licnost_ime'][$key] != ''){
                        $newavatarlicnostiName = time() . time() . rand(4,9) . '.' . $a_l->getClientOriginalExtension();
                        $destPath = public_path('/images/avatar_licnost');
                        $a_l->move($destPath, $newavatarlicnostiName);

                        DB::table('istaknute_licnosti')->insert([
                            'avatar' => $newavatarlicnostiName,
                            'ime' => $data['licnost_ime'][$key],
                            'prezime' => $data['licnost_prezime'][$key],
                            'opis' => $data['licnost_opis'][$key],
                            'club_id' => $id
                        ]);
                    }
                }
            }*/

            if($data->hasFile('galerija')){
                $galerije = $data->file('galerija');
                foreach($galerije as $key=>$gal){
                    $newgalName = time() . time() . rand(4,9) . '.' . $gal->getClientOriginalExtension();
                    $destPath = public_path('/images/galerija_sportista');
                    $gal->move($destPath, $newgalName);

                    DB::table('sportista_galerija')->insert([
                        'url' => $newgalName,
                        'sportista' => 'volleyball',
                        'sportista_id' => $id
                    ]);
                }
            }

             return redirect('athlete/volleyball/'.$id);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Footballer  $footballer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sportista = 'volleyball';
        $personal = DB::table('volleyball')->where('id', $id)->first();
        $biografija = DB::table('biografija')->where('sportista', $sportista)->where('sportista_id', $id)->first();
        $klupska_historija = DB::table('klupska_historija')->where('sportista', $sportista)->where('sportista_id', $id)->get();
        $sportista_trofej = DB::table('sportista_trofej')->where('sportista', $sportista)->where('sportista_id', $id)->get();
        $sportista_galerija = DB::table('sportista_galerija')->where('sportista', $sportista)->where('sportista_id', $id)->get();
        return view('athlete.volleyball.profile', ['personal' => $personal, 'biografija' => $biografija, 'klupska_historija' => $klupska_historija, 'sportista_trofej' => $sportista_trofej, 'sportista_galerija' => $sportista_galerija]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Footballer  $footballer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footballer $footballer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Footballer  $footballer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footballer $footballer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Footballer  $footballer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footballer $footballer)
    {
        //
    }
}
