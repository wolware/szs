<?php

namespace App\Http\Controllers;

use App\ClubRequest;
use App\Repositories\RegionRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $regionRepository;

    /**
     * Create a new controller instance.
     *
     * @param RegionRepository $regionRepository
     */
    public function __construct(RegionRepository $regionRepository)
    {
        $this->regionRepository = $regionRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function settings_index()
    {
        $user = User::where('id', Auth::user()->id)->first();

        $countries = $this->regionRepository
            ->getCountries();

        return view('profile.settings', ['data' => $user, 'countries' => $countries]);
    }


    public function settings_update(Request $data){

    	$validator = Validator::make($data->all(), [
            'name' => 'nullable|max:255|string',
            'email' => 'nullable|max:255|string',
            'password' => 'nullable|max:255|min:6|string|confirmed',
            'avatar' => 'nullable|image|mimes:jpg,png,jpeg|dimensions:min_width=64,min_height=64,max_width=700,max_height=700',
            'address' => 'nullable|string',
            'phone' => 'nullable|string|max:25',
            'dob' => 'nullable|date|before_or_equal:' . Carbon::now()->toDateString(),
            'spol' => 'required|string|in:Muško,Žensko',
            'country' => 'required|integer|exists:regions,id'
        ]);
        if($validator->fails()){
            return redirect('me/settings')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            $newAvatarName = null;

            if($data->file('avatar')){
               $avatar = $data->file('avatar');
                $newAvatarName = time() . '-' . Auth::user()->id . '-' .$avatar->getClientOriginalExtension();
                $destinationPath = public_path('/images/avatars');
                $avatar->move($destinationPath, $newAvatarName);
            }

            $attributesToUpdate = [
                'address' => $data->get('address'),
                'phone' => $data->get('phone'),
                'dob' => new Carbon($data->get('dob')),
                'spol' => $data->get('spol'),
                'country' => $data->get('country')
            ];

            if($newAvatarName) {
                $attributesToUpdate['avatar'] = $newAvatarName;
            }

            if($data->filled('password')){
                $attributesToUpdate['password'] = bcrypt($data->get('password'));
            }

            $userUpdate = User::where('id', Auth::user()->id)
                ->update($attributesToUpdate);

            if($userUpdate) {
                flash()->overlay('Uspješno ste editovali Vaš profil.', 'Čestitamo');
                return back();
            }
        }
        
    }

    public function displayNotifications() {
        $notifys = ClubRequest::with(['club', 'player', 'staff'])->whereHas('club', function ($query) {
            $query->where('clubs.user_id', Auth::user()->id);
        })->paginate(10);

        return view('profile.notifications', compact('notifys'));
    }
}
