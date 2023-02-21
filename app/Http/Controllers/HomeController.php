<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kvartira;

class HomeController extends Controller
{
    public function show($id) {

        $k_info = Kvartira::with('home_info')->where("id", $id)->first();

        return view('home', ["info" => $k_info]);
    }
}
