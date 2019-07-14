<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class StoreClub extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'logo' => 'array|nullable',
            'name' => 'required|max:255|string',
            'nature' => 'required|max:255|string',
            'continent' => 'required|integer|exists:regions,id',
            'country' => 'required|integer|exists:regions,id',
            'province' => 'integer|exists:regions,id',
            'region' => 'integer|exists:regions,id',
            'municipality' => 'integer|exists:regions,id',
            'city' => 'required|max:255|string',
            'type' => 'required|integer',
            'sport' => 'required|integer|exists:sports,id',
            'category' => 'required|integer|exists:club_categories,id',
            'established_in' => 'nullable|digits:4|integer|min:1800|max:' . date('Y'),
            'home_field' => 'nullable|max:255|string',
            'competition' => 'nullable|max:255|string',
            'association' => 'nullable|integer|exists:associations,id',
            'phone_1' => 'nullable|max:50|string',
            'phone_2' => 'nullable|max:50|string',
            'fax' => 'nullable|max:50|string',
            'email' => 'nullable|max:255|email',
            'website' => 'nullable|max:255|string',
            'address' => 'nullable|max:255|string',
            'facebook' => 'nullable|max:255|string',
            'instagram' => 'nullable|max:255|string',
            'twitter' => 'nullable|max:255|string',
            'youtube' => 'nullable|max:255|string',
            'video' => 'nullable|max:255|string',
            'history' => 'nullable|string',
            // Licnosti
            'licnost' => 'array',
            'licnost.*' => 'array',
            'licnost.*.avatar' => 'image|dimensions:min_width=312,min_height=250',
            'licnost.*.ime' => 'required|max:255|string',
            'licnost.*.prezime' => 'required|max:255|string',
            'licnost.*.opis' => 'nullable|max:1000|string',
            // Nagrade
            'nagrada' => 'array',
            'nagrada.*' => 'array',
            'nagrada.*.vrsta' => 'required|max:255|string|in:Medalja,Trofej/Pehar,Priznanje,Plaketa',
            'nagrada.*.tip' => 'required|max:255|string|in:Zlato,Srebro,Bronza,Ostalo',
            'nagrada.*.nivo' => 'required|max:255|string|in:Internacionalni nivo,Regionalni nivo,Državni nivo,Entitetski nivo,Drugo',
            'nagrada.*.takmicenje' => 'required|max:255|string',
            'nagrada.*.sezona' => 'required|digits:4|integer|min:1800|max:' . date('Y'),
            'nagrada.*.osvajanja' => 'nullable|integer',
            // Slike
            'galerija' => 'array',
//            'galerija.*' => 'required|image',
            // Dokazi
            'proof' => 'required|array',
//            'proof.*' => 'required|image',
        ];
    }
}
