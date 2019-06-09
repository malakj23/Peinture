<?php
namespace App\Http\Controllers;
namespace App\models;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Contact;
use Illuminate\Support\Facades\Input;
use Auth;
use App\User;

class ContactController extends Controller
{
    public function index()
    {
      if (Auth::user()->type === 'admin') {
      
      $listcontact = Contact::all();
      }      return view('back.contact', ['contact' => $listcontact]);
  
    }
    public function create()
    {
        $listcontact = \DB::table('contacts')->pluck('nom','id');
        $listcontact=collect($listcontact)->toArray();
        return view('front.contacts')->with('listcontact', $listcontact);
    }
    public function store(Request $request)
    {
        $contact = new Contact();
       
        $contact->nom = $request->input('nom');
        $contact->email = $request->input('email');
        $contact->telephone = $request->input('telephone');
        $contact->message = $request->input('message');
        
        $contact->save();
        return redirect('/');
  }
  public function destroy(Request $request, $id)
  {
      $contact = Contact::find($id);
      $contact->delete();
      session()->flash('success', 'Le message a été supprimé !!');
      return redirect('Contacts');

  }
}
