<?php

namespace App\Http\Controllers;

use App\Models\BulletPointFirst;
use Illuminate\Http\Request;

class Li1Controller extends Controller
{
    public function store(Request $request){
        $store = new BulletPointFirst;
        $store->contenu = $request->contenu;
        $store->save();
        return redirect()->back();
    }
    public function destroy($id)
    {
        $destroy = BulletPointFirst::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
