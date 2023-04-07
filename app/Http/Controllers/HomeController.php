<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kvartira;

use App\Models\Favorite;

class HomeController extends Controller
{
    public function show($id) {

        $k_info = Kvartira::with('home_info')->where("id", $id)->first();
        $fav_product = Favorite::where("favorites.session_id", session()->getId())->get();

        return view('home', ["info" => $k_info, "favorites" => $fav_product]);
    }
}
