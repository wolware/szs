<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    /*protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
*/
    public function register(Request $data){
        $messages = [
            'required' => ':attribute polje je obavezno.',
            'email.unique' => 'E-mail je već zauzet.',
            'name.unique' => 'Korisničko ime je već zauzeto.',
            'max' => ':attribute mora imati manje karaktera od :max',
            'min' => ':attribute mora imati više karaktera od :min',
            'confirmed' => ':attribute se ne podudara.',
            'prihvatam.required' => 'Morate prihvatit naše uvjete i odredbe.'
        ];

        $validator = Validator::make($data->all(), [
            'name' => 'required|unique:users|max:255|string',
            'email' => 'required|unique:users|max:255|string',
            'password' => 'required|max:255|min:6|string|confirmed',
            'spol' => 'required',
            'dob' => 'required',
            'country' => 'required',
            'prihvatam' => 'required'
        ], $messages);

        if($validator->fails()){
            return redirect('/register')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $user = new User();
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = bcrypt($data['password']);
            $user->spol = $data['spol'];
            $user->dob = $data['dob'];
            $user->country = $data['country'];
            $user->save();

            Auth::loginUsingId($user->id);

            return redirect('/');
        }

    }
}
