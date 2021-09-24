<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        return view("welcome");
        }
    
    public function getAll(){
        $article = Article::all();
        return view('home',['article'=> $article]);
        }

        public function getById($id){
        $article = Article::find($id);
        return view('article',['article'=> $article, 'id' => $id]);
        }
}
