<?php

namespace App\Http\Controllers;

use App\Models\BulletPointFirst;
use App\Models\BulletPointSecond;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Composant;
class HomeController extends Controller
{
    public function index(){
		$homeCont=Home::all();
		$compoCont=Composant::all();
        $bpf = BulletPointFirst::all();
        $bps = BulletPointSecond::all();

		return view('home',compact('homeCont','compoCont', 'bpf', 'bps'));
	}
}
