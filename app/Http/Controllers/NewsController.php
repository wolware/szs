<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Vijest;
use App\VijestKategorija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{

    public function addNewsForm(){
        $vijest_kategorija = VijestKategorija::all();

        return view('news.new', compact('vijest_kategorija'));
    }

    public function new(Request $request){
        //TODO request je naslov, sadrzaj, zavrsit implementaciju i upisivanja u bazu, s validacijom client i server side

        $validatedData = Validator::make($request->all(), [
            'naslov' => 'required|unique:vijest|max:255',
            'kategorija' => 'required',
            'sadrzaj' => 'required',
            'slika' => 'image|dimensions:min_width=980,min_height=720|max:5120'
        ]);

        if ($validatedData->fails())
        {
            return redirect()->back()
                ->withErrors($validatedData->errors())
                ->withInput();
        }
        $photoName = null;

        if($request->filled('slika')) {
            // Ucitaj sliku i spasi u /public/images/vijesti/galerija
            $photoName = auth()->user()->id . '_' . time() . '.' . $request->slika->getClientOriginalExtension();
            $request->slika->move(public_path('images/vijesti/galerija'), $photoName);

            // Izrezi i optimizuj sliku za naslovnu
            $image_resize = Image::make(public_path('images/vijesti/galerija/' . $photoName));
            $image_resize->crop(960, 600);
            $image_resize->save(public_path('images/vijesti/galerija/' . 'naslovna' . $photoName));
        }

        $vijest = Vijest::create([
            'naslov' => $request->get('naslov'),
            'sadrzaj' => $request->get('sadrzaj'),
            'user_id' => auth()->user()->id,
            'vijest_kategorija_id' => $request->get('kategorija'),
            'slika' => $photoName
        ]);

        if($vijest) {
            // Provjera tagova
            if($request->tagovi) {
                $tagovi = explode(',', $request->tagovi);
                $tagoviIds = [];

                foreach ($tagovi as $tag) {
                    $noviTag = Tag::firstOrCreate([
                        'tag' => trim($tag, " ")
                    ]);

                    if($noviTag) {
                        $tagoviIds[] = $noviTag->id;
                    }
                }

                $vijest->tagovi()->sync($tagoviIds);
            }

            return redirect()->back()->with('success', 'Vijest "' . $vijest->naslov . '" je kreirana uspješno.');
        }
    }

    public function displayNews($id) {
        $novost = Vijest::where('odobreno', 1)->where('izbrisano', 0)->with('tagovi', 'kategorija', 'user')->find($id);

        if(!$novost) {
            abort(404);
        }

        return view('news.display_news', compact('novost'));
    }
}
