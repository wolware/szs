<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $userSocialite = Socialite::driver('facebook')->user();

        //$user->token;

        $user = new Users();
        $user->name = $userSocialite->name;
        $user->email = $userSocialite->email;
        $user->password = bcrypt('default123');
        $user->save();

        Auth::login($user);
    }

    public function login(Request $data){
        $user = DB::table('users')->where('email', $data['name'])->first();
        if($user != null){
            if(Hash::check($data['password'], $user->password)){ 
                Auth::loginUsingId($user->id);
                return redirect('/');
            }
        }

        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

}
