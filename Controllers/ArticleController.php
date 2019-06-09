<?php

namespace App\Http\Controllers;
namespace App\models;
namespace App\Http\Controllers;
use Illuminate\Http\UploadedFile;
use App\Models\Article;
use Illuminate\Support\Facades\Input;
use Auth;
use App\User;
use Mapper;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    

    public function index()
    {
      if (Auth::user()->type === 'artist') {
        $article = Article::where('user_id', Auth::user()->id)->get();
        return view('profil.articleart', ['article' => $article]);

      } else{

      $article = Article::all();
      return view('back.article', ['article' => $article]);}
  
    }
    public function create()
    {
      if (Auth::user()->type === 'artist') {
        $article = \DB::table('articles')->pluck('titre','id');
        $article=collect($article)->toArray();
        return view('profil.articleajout')->with('article', $article);
        }else{
        $article = \DB::table('articles')->pluck('titre','id');
        $article=collect($article)->toArray();
        return view('back.ajoutarticle')->with('article', $article);}
    }
    public function store(Request $request)
    {
      if (Auth::user()->type === 'artist') {
        $article = new Article();
        $article->user_id = Auth::user()->id;

        $article->titre = $request->input('titre');
        
        $article->description = $request->input('desc');
        $article->image = $request->input('image');
        if ($request->hasFile('image')) {
          $article->image = $request->file('image')->store('articles');
      }
      }else{
        $article = new Article();
        $article->user_id = Auth::user()->id;

        $article->titre = $request->input('titre');
        
        $article->description = $request->input('desc');
        $article->image = $request->input('image');
        if ($request->hasFile('image')) {
          $article->image = $request->file('image')->store('articles');
      }
      $article->cache = $request->input('vis');
    }
        
        $article->save();
        session()->flash('success', 'L article a été enregistré !!');

        return redirect('/Articles');
      
       
  }

  public function edit($id)
  {
    $article = Article::find($id);

    if (Auth::user()->type === 'artist') {
      return view('profil.modifierarticle', ['article' => $article]);

    }
    else{
      return view('back.modifierarticle', ['article' => $article]);
    }

  }
  
  public function update(Request $request, $id)
  {
    if (Auth::user()->type === 'artist') {

    $article = Article::find($id);
    $article->titre = $request->input('titre');
    $article->description = $request->input('desc');


    if ($request->hasFile('image')) {
      $article->image = $request->file('image')->store('articles');
  }
}else{
  $article = Article::find($id);
    $article->titre = $request->input('titre');
    $article->description = $request->input('desc');
    $article->cache = $request->input('vis');


    if ($request->hasFile('image')) {
      $article->image = $request->file('image')->store('articles');
  }
}

    $article->save();
    session()->flash('success', 'L article a été modifié !!');
    
    return redirect('Articles');

  }



  
  public function showArticle()
  {
    $date = \Carbon\Carbon::today()->subDays(30);


    $article = Article::Join('users','articles.user_id','=','users.id')->select('articles.*','users.name')->get(); 
    $artic = Article::orderBy('articles.titre', 'description')->limit(6)->get();

    return view('front.article', ['article' => $article])->with('artic',$artic);
   
  }
  
  public function showdetailArticle($id)
  {

    $detailarticle = Article::where('id', '=', $id)->firstOrFail();    
return view('front.detailarticle', ['article' => $detailarticle]);
}



  public function destroy(Request $request, $id)
  {
      $article = Article::find($id);
      $article->delete();
      session()->flash('success', 'L article a été supprimé !!');
      return redirect('Articles');

  }
}
