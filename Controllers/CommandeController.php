<?php
namespace App\Http\Controllers;
namespace App\models;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Commande;
use App\Models\Tableau;
use Illuminate\Support\Facades\Input;
use Auth;
use App\User;

class CommandeController extends Controller
{
    public function index()
    {
      if (Auth::user()->type === 'admin') {

       
        $listcommande = Commande::Join('tableaus','tableaus.id','=','commandes.tableau_id')->select('tableaus.*','commandes.*','tableaus.titre')->get();    
      }      return view('back.commande', ['commande' => $listcommande]);
  
    }
    public function create($id)
    {$commande = Tableau::where('id','=',$id)->firstOrFail();   
        $listcommande = \DB::table('commandes')->pluck('nom','id');
        $listcommande=collect($listcommande)->toArray();
        return view('front.commande')->with('listcommande', $listcommande)->with('commande',$commande);
    }
    public function store(Request $request)
    {
        $commande = new Commande();
        $commande->tableau_id = $request->input('tableau_id');
        $commande->nom = $request->input('nom');
        $commande->email = $request->input('email');
        $commande->telephone = $request->input('telephone');
        $commande->adresse = $request->input('adresse');
        $commande->quantite = $request->input('quantite');
        $commande->save();
        return redirect('/');
  }
  public function destroy(Request $request, $id)
  {
      $commande = Commande::find($id);
      $commande->delete();
      session()->flash('success', 'La commande a été supprimée!!');
      return redirect('Commandes');

  }
}
