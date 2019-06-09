<?php

namespace App\Http\Controllers;
namespace App\models;
namespace App\Http\Controllers;
use Illuminate\Http\UploadedFile;
use App\Models\Evenement;
use App\Models\Formation;

use Illuminate\Support\Facades\Input;
use Auth;
use App\User;
use Mapper;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    

    public function index()
    {
      if (Auth::user()->type === 'admin') {
      
      $evenement = Evenement::all();
      }      return view('back.evenement', ['evenement' => $evenement]);
  
    }
    public function create()
    {
        $evenement = \DB::table('evenements')->pluck('titre','id');
        $evenement=collect($evenement)->toArray();
        return view('back.ajoutevt')->with('evenement', $evenement);
    }
    public function store(Request $request)
    {
        $evenement = new Evenement();
       
        $evenement->titre = $request->input('titre');
        $evenement->date = $request->input('date');
        $evenement->description = $request->input('desc');
        $evenement->photo = $request->input('photo');
        $evenement->video = $request->input('video');

        
        $evenement->save();
        return redirect('/Evenements');
  }

  public function edit($id)
  {
      $evenement = Evenement::find($id);
      return view('back.modifierevt', ['evenement' => $evenement]);

  }
  
public function showphoto()
{
  $gallerie1= Evenement::all();
  $gallerie2= Formation::all();

  return view('front.gallerie', ['gallerie1' => $gallerie1])->with('gallerie2',$gallerie2);
}
  
  public function update(Request $request, $id)
  {
    $evenement = Evenement::find($id);
  //  $tableau->image = $request->input('image');
    $evenement->titre = $request->input('titre');
    $evenement->date = $request->input('date');
    $evenement->description = $request->input('desc');
   // if (Auth::user()->type === 'admin') {
   //   $product->favorite = $request->input('favorite');}

    if ($request->hasFile('photo')) {
      $evenement->photo = $request->file('photo')->store('evenements');
  }
  if ($request->hasFile('video')) {
    $evenement->video = $request->file('video')->store('evenements');
}
    $evenement->save();
    session()->flash('success', 'L evenement a été modifié !!');
    
    return redirect('Evenement');

  }



  
  public function showEvenement()
  {
    $evenement = Evenement::all();    
    return view('front.evenement', ['evenement' => $evenement]);
   
  }



  public function destroy(Request $request, $id)
  {
      $evenement = Evenement::find($id);
      $evenement->delete();
      session()->flash('success', 'L evenement a été supprimé !!');
      return redirect('Evenements');

  }
}
