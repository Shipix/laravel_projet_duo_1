<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Composant;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
		$contactCont=Contact::all();
		$compoCont=Composant::all();
		return view('contact',compact('contactCont','compoCont'));
	}
}
