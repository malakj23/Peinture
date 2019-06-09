<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Request;
use Illuminate\Support\Facades\Input;
use Storage;
use Mail;
use App\Mail\Reminder;  
use Illuminate\Http\UploadedFile;
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
    protected $redirectTo = '/';

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
            'telephone' => 'required|string|max:255',
            'bio' => 'required|string|max:1000',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create( array $data)
    {
        
        $user = [
            'name' => $data['name'],
            'email' => $data['email'],
            'telephone' => $data['telephone'],
            'bio' => $data['bio'],
            
            'password' => bcrypt($data['password']),
            'type' => 'admin',
            
        ];
        $result = User::create($user);
        return $result;
     
    }
    public function registerFront()
    { 
       
       return view('auth.RegisterFront');

    }
    public function registerFrontCheck(Request $request)
    { 
        
        $validator = Validator::make($request::all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',

        ]);
        
        
        if ($validator->passes()){
    $user = new User();
    $user->name = Input::get("name");
    $user->email  = Input::get("email");
    $user->password  = bcrypt(Input::get('password'));
    $user->type='visiteur';
    
    $user->save();
    return redirect('/loginFront')->with('message','Vous avez enregistré avec succès , Vous pouvez se connecter ' );
    }
    else {return redirect ('RegisterFront')->withErrors($validator)->withInput();}
 
}

public function registerartist()
    { 
       
       return view('auth.RegisterArtist');

    }
public function registerFrontCheckartist(Request $request)
    { 
        
        $validator = Validator::make($request::all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',

        ]);
        
        
        if ($validator->passes()){
    $user = new User();
    $user->name = Input::get("name");
    $user->email  = Input::get("email");
    $user->password  = bcrypt(Input::get('password'));


    if(Request::hasFile('photo')){
        $user->photo = Request::File('photo')->store('users');
           
    }
    $user->type='artist';
    
    $user->save();
    return redirect('/loginFront')->with('message','Vous avez enregistré avec succès , Vous pouvez se connecter ' );
    }
    else {return redirect ('RegisterArtist')->withErrors($validator)->withInput();}
 
}


 
}
