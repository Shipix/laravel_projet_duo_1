<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Composant;

class AdminController extends Controller
{
    public function store(Request $request){
        $store = new Article; 
        $store->titre = $request->titre;
        $store->nom = $request->nom;
        $store->paraArticle = $request->paraArticle;
        $store->save();
        return redirect()->back();
    }
    public function index(){
        $compoCont=Composant::all();
        return view('Admin', compact('compoCont'));
    }
}
