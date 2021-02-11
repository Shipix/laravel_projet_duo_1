<?php

namespace App\Http\Controllers;

use App\Models\BulletPointSecond;
use Illuminate\Http\Request;

class Li2Controller extends Controller
{
    public function store(Request $request){
        $store = new BulletPointSecond;
        $store->contenu = $request->contenu;
        $store->save();
        return redirect()->back();
    }
    public function destroy($id)
    {
        $destroy = BulletPointSecond::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
