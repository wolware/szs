<?php

namespace App\Http\Controllers\Auth;

use App\Region;
use App\Repositories\RegionRepository;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
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

    protected $regionRepository;

    /**
     * Create a new controller instance.
     *
     * @param RegionRepository $regionRepository
     */
    public function __construct(RegionRepository $regionRepository)
    {
        $this->middleware('guest');
        $this->regionRepository = $regionRepository;
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
     * @param Request $data
     * @return Redirect
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
            'spol' => 'required|string|in:Muško,Žensko',
            'birth_date' => 'required|date|before_or_equal:' . Carbon::now()->toDateString(),
            'country' => 'required|integer|exists:regions,id',
            'prihvatam' => 'required'
        ], $messages);

        if($validator->fails()){
            return redirect('/register')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $user = new User();

            $user->name = $data->name;
            $user->email = $data->email;
            $user->password = bcrypt($data->password);
            $user->spol = $data->spol;
            $user->dob = Carbon::parse($data->birth_date)->toDateString();
            $user->country = $data->country;

            if($user->save()) {
                Auth::loginUsingId($user->id);
                return redirect('/');
            }
        }

    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $countries = $this->regionRepository->getCountries();

        return view('auth.register', compact('countries'));
    }
}
