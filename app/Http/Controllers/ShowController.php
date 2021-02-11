<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\BulletPointFirst;
use App\Models\BulletPointSecond;
use App\Models\Composant;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show($id)
    {
        $show = Article::find($id);
        $compoCont=Composant::all();
        return view('show', compact('show', 'compoCont'));
    }
}
