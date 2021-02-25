<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\BulletPointFirst;
use App\Models\BulletPointSecond;
use App\Models\Composant;

class AdminController extends Controller{
    public function store(Request $request){

        $validation = $request->validate([
            "titre" => 'required',
            "nom" => 'required',
            "paraArticle" => 'required'
        ]);
        $store = new Article; 
        $store->titre = $request->titre;
        $store->nom = $request->nom;
        $store->paraArticle = $request->paraArticle;
        $store->save();
        return redirect()->back();
    }
    public function index(){
        $compoCont=Composant::all();
        $articleCont=Article::all();
        $bpf=BulletPointFirst::all();
        $bps=BulletPointSecond::all();
        return view('Admin', compact('compoCont', 'articleCont', 'bpf', 'bps'));
    }
    public function destroy($id)
    {
        $destroy = Article::find($id);
        $destroy->delete();
        return redirect()->back();
    }

}
