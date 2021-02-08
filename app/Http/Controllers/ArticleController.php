<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Composant;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
		$articleCont=Article::all();
		$compoCont=Composant::all();
		return view('article',compact('articleCont','compoCont'));
	}
}
