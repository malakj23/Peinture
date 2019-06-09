<?php

namespace App\Http\Controllers;
namespace App\models;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Formation;
use App\Models\Tableau;
use Illuminate\Support\Facades\Input;
use Auth;
use App\User;

class FormationController extends Controller
{
    public function index()
    {
      if (Auth::user()->type === 'admin') {

       
        $formation = Formation::all();    
      }      return view('back.formation', ['formation' => $formation]);
  
    }
    public function create()
    {   
        $formation = \DB::table('formations')->get();
        $formation=collect($formation)->toArray();
        return view('back.ajoutformation')->with('formation', $formation);
    }
    public function edit($id)
    {
        $formation = Formation::find($id);
        return view('back.modifierformation', ['formation' => $formation]);
  
    }
    
    public function store(Request $request)
    {
        $formation = new Formation();
     
        $formation->titre = $request->input('titre');
        $formation->date = $request->input('date');
        $formation->description = $request->input('desc');
        if ($request->hasFile('photo')) {
            $formation->photo = $request->file('photo')->store('formations');
        }
        $formation->save();
        return redirect('Formations');
  }



  public function update(Request $request, $id)
  {
    $formation = Formation::find($id);
  //  $tableau->image = $request->input('image');
  $formation->titre = $request->input('titre');
  $formation->date = $request->input('date');
  $formation->description = $request->input('desc');
  if ($request->hasFile('photo')) {
      $formation->photo = $request->file('photo')->store('formations');
  }

    $formation->save();
    session()->flash('success', 'La formation a été modifié !!');
    
    return redirect('Formations');

  }

  public function destroy(Request $request, $id)
  {
      $formation = Formation::find($id);
      $formation->delete();
      session()->flash('success', 'La formation a été supprimée!!');
      return redirect('Formations');

  }

  public function showFormation(){
  $formation = Formation::all();    
    return view('front.formation', ['formation' => $formation]);
   }

}
