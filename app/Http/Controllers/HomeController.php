<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Composant;
class HomeController extends Controller
{
    public function index(){
		$homeCont=Home::all();
		$compoCont=Composant::all();
		return view('home',compact('homeCont','compoCont'));
	}
}
