<?php

namespace App\Http\Controllers;
namespace App\models;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Donate;
use App\User;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Commande;
class DonateController extends Controller
{
    public function index()
    {
        if (Auth::user()->type === 'admin') {

       
            $listdonate = Donate::Join('users','users.id','=','donates.artist_id')->select('users.*','donates.*','users.name','users.photo')->get();    
          }      return view('back.donation', ['donate' => $listdonate]);
      
    }
    public function create($id)
    {
        $donate = User::where('id','=',$id)->firstOrFail();    
        $listdonate = \DB::table('donates')->pluck('nom','id');
        $listdonate=collect($listdonate)->toArray();
        return view('front.donation')->with('listdonate', $listdonate)->with('donate',$donate);
        
    }
    public function store(Request $request)
    {
        $donate = new Donate();
        $donate->artist_id = $request->input('artist_id');

        $donate->nom = $request->input('nom');
        $donate->telephone = $request->input('telephone');
        $donate->money = $request->input('montant');
        
        $donate->save();
        return redirect('/');
  }
  public function destroy(Request $request, $id)
  {
      $donate = Donate::find($id);
      $donate->delete();
      session()->flash('success', 'Le message a été supprimé !!');
      return redirect('Donates');

  }
}

