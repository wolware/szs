<?php

namespace App\Http\Controllers;

use App\Athletics;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class KuglanaController extends Controller
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
    public function new_show()
    {
        return view('objects.kuglana.new');
    }
    public function kuglana_show($id){
        $kuglana = DB::table('kuglana')->where('id', $id)->first();
        return view('objects.kuglana.profile', ['kuglana' => $kuglana]);
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
            'naziv' => 'required|max:255|string',
            'kontinent' => 'required|max:255|string',
            'drzava' => 'required|max:255|string',
            'entitet' => 'required',
            /*'kanton' => 'required',
            'opcina' => 'required',*/
            'grad' => 'required',
            /*'klub' => 'required',
            'visina' => 'required',
            'tezina' => 'required'*/
        ], $messages);
        if($validator->fails()){
            return redirect('objects/kuglana/new')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $newLogoName = '';
            if($data->file('profilna')){
                $avatar = $data->file('profilna');
                $newLogoName = time() . rand(111,999) . '.' . $avatar->getClientOriginalExtension();
                $destinationPath = public_path('/images/objects_profilne');
                $avatar->move($destinationPath, $newLogoName);

                $data['profilna'] = $newLogoName;
            }else{
                $data['profilna'] = 'default.png';
            }

            if(empty($data['kanton'])){
                $data['kanton'] = $data['kantonSrb'];
            }
            if(empty($data['opcina'])){
                $data['opcina'] = $data['opcinaSrb'];
            }
            $id = DB::table('kuglana')->insertGetId([
                'profilna' => $newLogoName,
                'naziv' => $data['naziv'],
                'kontinent' => $data['kontinent'],
                'drzava' => $data['drzava'],
                'entitet' => $data['entitet'],
                'opcina' => $data['opcina'],
                'kanton' => $data['kanton'],
                'grad' => $data['grad'],
                'fb' => $data['fb'],
                'instagram' => $data['instagram'],
                'youtube' => $data['youtube'],
                'google_map' => $data['google_map'],
                'datum_otvorenja' => $data['datum_otvorenja'],
                'broj_staza' => $data['broj_staza'],
                'broj_kugli' => $data['broj_kugli'],
                'povrsina_objekta' => $data['povrsina_objekta'],
                'kapacitet_objekta' => $data['kapacitet_objekta'],
                'wifi' => $data['wifi'],
                'parking' => $data['parking'],
                'restoran' => $data['restoran'],
                'kafeterija' => $data['kafeterija'],
                'pristup_invalid' => $data['pristup_invalid'],
                'broj_ormarica' => $data['broj_ormarica'],
                'tusevi' => $data['tusevi'],
                'tabla' => $data['tabla'],
                'pomagala' => $data['pomagala'],
                'ormaric' => $data['ormaric'],
                'mokri_cvor' => $data['toalet'],
                'obuca' => $data['obuca'],
                'klimatizacija' => $data['klimatizacija'],
                'oprema' => $data['oprema'],
                'clanska_kartica' => $data['clanska_kartica'],
                'video_nadzor' => $data['video_nadzor'],
             ]);

            if(!empty($data['content'])){
                DB::table('vremeplov_objekta')->insert([
                    'content' => $data['content'],
                    'objekat' => 'kuglana',
                    'objekat_id' => $id
                ]);
            }else{
                DB::table('vremeplov_objekta')->insert([
                    'content' => "",
                    'objekat' => 'kuglana',
                    'objekat_id' => $id
                ]);
            }

            if($data->hasFile('galerija')){
                $galerije = $data->file('galerija');
                foreach($galerije as $key=>$gal){
                    $newgalName = time() . time() . rand(4,9) . '.' . $gal->getClientOriginalExtension();
                    $destPath = public_path('/images/galerija_objekti');
                    $gal->move($destPath, $newgalName);

                    DB::table('galerija_objekat')->insert([
                        'url' => $newgalName,
                    'objekat' => 'kuglana',
                        'objekat_id' => $id
                    ]);
                }
            }else{
               DB::table('sportista_galerija')->insert([
                    'url' => "default.png",
                    'objekat' => 'kuglana',
                    'objekat_id' => $id
                ]); 
            }

             return redirect('objects/kuglana/'.$id);
        }
    }


}
