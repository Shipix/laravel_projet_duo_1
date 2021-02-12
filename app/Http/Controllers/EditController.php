<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Composant;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit($id)
    {
        $edit = Article::find($id);
        $compoCont=Composant::all();
        return view('edit', compact('edit', 'compoCont'));

    }
    public function update(Request $request, $id)
    {
        $update = Article::find($id);
        $update->titre = $request->titre;
        $update->nom = $request->nom;
        $update->paraArticle = $request->paraArticle;
        $update->save();
        return redirect('/admin');
    }
}
