<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function viewTen(){
        $articles = Article::latest()->take(10)->get();//affiche les derniers, 10, prends
        // Autre méthode :   $Articles = Articles::orderBy('created_at', 'desc')->take(10)->get();
        return view('accueil')->with('articles',$articles);
    }

    public function create () {
        return view('nouveau');
    }

    public function save (ArticleRequest $request) {
        // On créé le produit dans la base de données
        $product = Article::create($request->all());//::fn statique
        $product->save();//Le save est optionnel pour la création (première fois)
        return redirect('/');
    }

    public function viewArticle($id) 
    {   
        $details=Article::find($id);
        return view('details')->with('details',$details);
    }

    public function update ($id){        
        return view('update')->with('article',Article::find($id));
    }

    public function saveUpdate (ArticleRequest $request,$id){
        // On trouve le produit dans la base de données
        $article = Article::find($id);

        $article->title = $request->title;
        $article->author = $request->author;
        $article->email = $request->email;
        $article->age = $request->age;     
        $article->zipcode = $request->zipcode;     
        $article->content = $request->content;     
                
        $article->save();
        
        return redirect('/');
    }

    public function delete ($id){

        $article = Article::find($id);        
        $article->delete();

        return redirect('/');
    }

}
