<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Vijest;
use App\VijestKategorija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
            'sadrzaj' => 'required'
        ]);

        if ($validatedData->fails())
        {
            return redirect()->back()
                ->withErrors($validatedData->errors())
                ->withInput();
        }


        $vijest = Vijest::create([
            'naslov' => $request->get('naslov'),
            'sadrzaj' => $request->get('sadrzaj'),
            'user_id' => auth()->user()->id,
            'vijest_kategorija_id' => $request->get('kategorija')
        ]);

        if($vijest) {
            // Provjera tagova
            if($request->tagovi) {
                $tagovi = explode(',', $request->tagovi);
                $tagoviIds = [];

                foreach ($tagovi as $tag) {
                    $noviTag = Tag::firstOrCreate([
                        'tag' => $tag
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
}
