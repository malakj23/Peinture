<?php

namespace App\Http\Controllers\Auth;


use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Authenticatable;


use Auth;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Laravel\Socialite\Facades\Socialite;
class LoginController extends Controller
{
    /*<?php

namespace App\Http\Controllers\Auth;



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
    protected $redirectTo = '/Tableau';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function logout(Request $request) {
        if (!(Auth::user()->type==="admin"))
        {Auth::logout();
        return redirect('/loginFront');}
        else { Auth::logout();
            return redirect('/login');}
    }





    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function loginFront()
    { 
    
       return view('auth.loginFront');

    }

    public function loginFrontCheck(Request $request){
        $validator = Validator::make(Input::all(), [
            'email'     => 'email|required',
            'password'  => 'required'
        ]);
    if ($validator->passes()){
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            if (auth()->user()->type == 'admin' || auth()->user()->type == 'artist') {
            
                return redirect('/Tableau');
            } else if (auth()->user()->type == 'utilisateur') {

                return redirect('/');//->with(Session::put('name',auth()->user()->name))
            }
        } else {
            return redirect('/loginFront')->with('status', 'Adresse e-mail ou / et mot de passe sont incorrects.');
        }
    } else {return redirect('/loginFront')->withErrors($validator)->withInput();}
    
}
}
