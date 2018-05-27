<?php

namespace App\Http\Controllers;

use App\Repositories\RegionRepository;
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
        dd($data->all());
    	$validator = Validator::make($data->all(), [
            'name' => 'nullable|max:255|string',
            'email' => 'nullable|max:255|string',
            'password' => 'nullable|max:255|min:6|string|confirmed',
            'avatar' => 'nullable|image|mimes:jpg,png,jpeg|dimensions:min_width=64,min_height=64,max_width=700,max_height=700',
            'address' => 'nullable|string',
            'phone' => 'nullable|string|max:25'
        ]);
        if($validator->fails()){
            return redirect('me/settings')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $noviAvatar = 0;
            if($data->file('avatar')){
               $avatar = $data->file('avatar');
                $newAvatarName = rand(11111,99999) . time().'.'.$avatar->getClientOriginalExtension();
                $destinationPath = public_path('/images/avatars');
                $avatar->move($destinationPath, $newAvatarName);

                $data['avatar'] = $newAvatarName; 
                $noviAvatar = 1;
            }
            
            if(empty($data['password'])){
                $data['password'] = Auth::user()->password;
            }else{
                $data['password'] = bcrypt($data['password']);
            }
            $user = Auth::user();
            if($noviAvatar == 1){
                $user->avatar = $newAvatarName;
            }
           // DB::table('users')->where("id", Auth::user()->id)->update($data->all());
            $user->address = $data['address'];
            $user->phone = $data['phone'];
            $user->update($data->all());
            flash('Uspješno ste editovali Vaš profil.');
            return redirect('me/settings');
        }
        
    }
}
