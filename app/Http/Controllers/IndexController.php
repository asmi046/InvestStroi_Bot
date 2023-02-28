<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Home;
use App\Models\Favorite;

class IndexController extends Controller
{
    public function show(Request $request) {
        $home_name = empty($request->input('home'))?"%":$request->input('home');
        $kv_type = empty($request->input('kvartira'))?"%":$request->input('kvartira');
        $selectHome = Home::where('addres', "LIKE", $home_name)->first();
        $kvartirs = $selectHome->home_kvartirs()->where('type', "LIKE", $kv_type)->get();

        $all_home = Home::all();
        $KvType = $selectHome->home_kvartirs()->select('type')->groupBy('type')->get();


        $fav_product = Favorite::where("favorites.session_id", session()->getId())->get();

        // dd($fav_product->contains("product_sku", 1));

        return view('index', ['all_home' => $all_home, 'selecthome' => $selectHome, "kvartirs" => $kvartirs, 'kvtype' => $KvType, "favorites" => $fav_product]);
    }
}
