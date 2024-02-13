<?php

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    //eloquent e query builder

    private $articles = [['titolo'=> 'SQUAT', 'descrizione'=>'Lo squat è il re degli esercizi per le gambe','categoria'=>'gambe'],
    ['titolo'=> 'PANCA PIANA', 'descrizione'=>'Esercizio focalizzato per il petto con una sua specifica tecnica', 'categoria'=>'petto'],
    ['titolo'=> 'STACCO', 'descrizione'=>'Fondamentale per costruire una schiena possente','categoria'=>'dorso'],
    ['titolo'=> 'PULLEY', 'descrizione'=>'esercizio di tirata che focalizza, in base alla posizione, parti del dorso','categoria'=>'dorso']
    ];
        
  
    private $categories=[];

    public function  __construct()
    {
        foreach($this->articles as $article){
            $categories[]= $article['categoria'];
        }
    }

    public function index() {
    
        $titolo1 = 'I FONDAMENTALI';
        $articoli = $this->articles;
        return view('articoli', compact('titolo1','articoli'));
    }

    public function show($id){
        
        return view('dettaglio',['articolo'=>$this->articles[$id]]);

    }

    
    public function byCategory($category){
        
        $articlesByCategory = [];
         
        foreach ($this->articles as $article) {

            if ($article['categoria'] == $category) {
                $articlesByCategory[] = $article;
            }

        }
         
        return view('articoli-category', ['articoli' => $articlesByCategory, 'categoria' => $category]);
    }


    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:550',
            'description' => 'required|max:150',
            'category' => 'required|max:20',
            'author' => 'required|max:20'
        ], [
            'title.required' => 'Il titolo deve essere specificato.',
            'description.required' =>'la descrizione deve essere specificata',
            'category.required' => 'la categoria deve essere specificata',
            'author.required' => 'l autore deve essere specificato'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        Article::create($request->only(['title', 'description', 'category', 'author']));
    
        return redirect()->back()->with(['success' => 'Articolo inserito con successo']);
    }

    public function create(){

        return view('create-article');
    }
    

    
}


?>