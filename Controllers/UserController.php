<?php

namespace App\Http\Controllers;
namespace App;
namespace App\models;
use Illuminate\Http\UploadedFile;

namespace App\Http\Controllers;
use App\Http\Requests\userRequest;
use App\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{

 
    

    public function profile()
    {
        $listuser = User::where('id', Auth::user()->id)->first();
        return view('profil.profil', ['user' => $listuser]);
    }
    
    public function edit($id)
    {        $user = User::find($id);

    if (Auth::user()->type === 'artist') {

        return view('profil.edit', ['user' => $user]);}
        else{
            return view('back.modifartist', ['user' => $user]);}

    

    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if (Auth::user()->type === 'artist') {
       
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->bio = $request->input('bio');

        $test = ($request->oldpassword);
        $testpass = ($user->password);
        if (Hash::check($test, $testpass)) {
            $user->password = bcrypt($request->input('password'));}
            if ($request->hasFile('avatar')) {
                $user->avatar = $request->file('avatar')->store('app');
            }
            session()->flash('success', 'Le profil a été modifié !!');
        $user->save();
        return redirect('profil');
        }else{
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->bio = $request->input('bio');
            $user->cache = $request->input('vis');

          
                session()->flash('success', 'visualisation a été modifié !!');
            $user->save();
            return redirect('Artiste');

        }
    }
    
    public function index()
    {
        $visiteur = User::where('type', 'utilisateur')->get();
        return view('back.visiteur', ['visiteur' => $visiteur]);
    }
    public function indexARtist()
    {
        $artist = User::where('type', 'artist')->get();
        return view('back.artiste', ['artist' => $artist]);
    }

    public function destroyvisiteur(Request $request, $id){
        $user =User::find($id);
        $user->delete();
        session()->flash('success', 'Le visiteur  a été supprimée !!');
        return redirect('Visiteurs');}

    
        public function destroyartist(Request $request, $id){
            $user =User::find($id);
            $user->delete();
            session()->flash('success', 'Le visiteur  a été supprimée !!');
            return redirect('Artiste');}
}

