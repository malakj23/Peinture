<?php
namespace App\Http\Controllers;
namespace App\models;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Tableau;
use App\Models\Evenement;
use App\Models\Formation;


use Illuminate\Support\Facades\Input;
use Auth;
use App\User;
use Mapper;
use App\Http\Requests\tableauRequest;

class TableauController extends Controller
{
  //lister la liste
  public function index()
  {
    if (Auth::user()->type === 'artist') {
      $listtableau = Tableau::where('user_id', Auth::user()->id)->get();
      return view('tableau.indexart', ['tableau' => $listtableau]);

    }
    else {
    $listtableau = Tableau::all();
    return view('tableau.index', ['tableau' => $listtableau]);

    }

  }

  public function create()
  {
    if (Auth::user()->type === 'artist') {
      $listtableau = \DB::table('tableaus')->pluck('titre','id');
      $listtableau=collect($listtableau)->toArray();
      return view('tableau.createart')->with('listtableau', $listtableau);
    }else{
      $listtableau = \DB::table('tableaus')->pluck('titre','id');
      $listtableau=collect($listtableau)->toArray();
      return view('tableau.create')->with('listtableau', $listtableau);}
  }


  public function store(tableauRequest $request)
  {
    if (Auth::user()->type === 'artist') {
      $tableau = new Tableau();
      $tableau->user_id = Auth::user()->id;
      $tableau->image = $request->input('image');
      $tableau->titre = $request->input('titre');
      $tableau->prix = $request->input('prix');
      $tableau->description = $request->input('description');
      $tableau->type = $request->input('type');
      $tableau->status = $request->input('status');
      $tableau->cache = "non-visualisé";

      if ($request->hasFile('image')) {
        $tableau->image = $request->file('image')->store('tableaux');
    }

     }else{
      $tableau = new Tableau();
      $tableau->user_id = Auth::user()->id;
      $tableau->image = $request->input('image');
      $tableau->titre = $request->input('titre');
      $tableau->prix = $request->input('prix');
      $tableau->description = $request->input('description');
      $tableau->type = $request->input('type');
      $tableau->status = $request->input('status');
      $tableau->cache =  $request->input('vis');

      if ($request->hasFile('image')) {
        $tableau->image = $request->file('image')->store('tableaux');
    }

     }   
     $tableau->save();
      session()->flash('success', 'Le  nouveau tableau a été enregistré !!');
      return redirect('Tableau');
}

    public function edit($id)
    {  $tableau = Tableau::find($id);
      if (Auth::user()->type === 'artist') {
        return view('tableau.editart', ['tableau' => $tableau]);

      }else{
      
        return view('tableau.edit', ['tableau' => $tableau]);
      }
    }

    public function update(tableauRequest $request, $id)
    {
      $tableau = Tableau::find($id);
      //  $tableau->image = $request->input('image');
        $tableau->titre = $request->input('titre');
        $tableau->prix = $request->input('prix');
        $tableau->description = $request->input('description');
        $tableau->type = $request->input('type');
        $tableau->status = $request->input('status');
        if ($request->hasFile('image')) {
          $tableau->image = $request->file('image')->store('tableaux');
      }
      if (Auth::user()->type === 'artist') {
        $tableau->cache ="non-visualisé";

      }else{
        $tableau->cache = $request->input('vis');

      }
     
     // if (Auth::user()->type === 'admin') {
     //   $product->favorite = $request->input('favorite');}
      
      $tableau->save();
      session()->flash('success', 'Le tableau a été modifié !!');
      
      return redirect('Tableau');

    }

    public function destroy(Request $request, $id)
    {
        $tableau = Tableau::find($id);
        $tableau->delete();
        session()->flash('success', 'Le tableau a été supprimée!!');
        return redirect('Tableau');

    }


    public function show()
    {
      
      $tableau = Tableau::Join('users','tableaus.user_id','=','users.id')->select('tableaus.*','users.name')
      ->where('tableaus.type','=','peinture')->get();
    
        return view('tableau.peinture', ['tableau' => $tableau]);
    }


    public function showSculpture()
    {
      $tableau = Tableau::Join('users','tableaus.user_id','=','users.id')->select('tableaus.*','users.name')
      ->where('tableaus.type','=','sculpture')->get();
     
        return view('tableau.sculpture', ['tableau' => $tableau]);
    }
    
    public function showPlastique(){
      $tableau = Tableau::Join('users','tableaus.user_id','=','users.id')->select('tableaus.*','users.name')
      ->where('tableaus.type','=','art-plastique')->get();
     
        return view('tableau.artplastique', ['tableau' => $tableau]);

    }


    public function showArtist()
    {

      
      $artist = User::where('type','artist')->orderBy('users.photo', 'desc')->get();
        return view('front.artist', ['artist' => $artist]);
    }



    public function showdetailArtist($id)
    {

      $detailartist = User::where('id', '=', $id)->firstOrFail();    
 return view('front.artistdetail', ['artist' => $detailartist]);
}
    
    
    public function Lastpost()
    {
      //  $date = \Carbon\Carbon::today()->subDays(30);

      $tableau = Tableau::Join('users','tableaus.user_id','=','users.id')->select('tableaus.*','users.name','users.photo')->orderBy('tableaus.type', 'desc')->limit(4)->get();
      $evenement = Evenement::limit(2)->get();
      $formation = Formation::limit(2)->get();
      return view('front.accueil', ['tableau' => $tableau])->with('evenement', $evenement)->with('formation', $formation);
    }


    
    public function detail($id)
    {
      
        $detailtableau = Tableau::Join('users','tableaus.user_id','=','users.id')->select('tableaus.*','users.name','users.photo')->where('tableaus.id', '>=', $id)->firstOrFail();    
 return view('tableau.tableaudetail', ['tableau' => $detailtableau]);
}




}
