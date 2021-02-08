<?php

namespace App\Http\Controllers;

use App\Models\Composant;
use Illuminate\Http\Request;

class CompoController extends Controller
{
    public function index(){
		$compoCont=Composant::all();
		return view(compact('compoCont'));
	}
}
