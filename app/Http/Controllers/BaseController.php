<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kvartira;
use App\Models\Home;



class BaseController extends Controller
{


    public function get_start_param() {

        $all_home = Home::all();
        $all_flat = Kvartira::select("type")->groupBy("type")->get();
        $max_flors = 10;

        return ["all_home" => $all_home, "flats" => $all_flat, "max_flors" =>$max_flors ];

    }



    public function query(Request $request) {
        $all_home = Home::all();
        $all_flat = Kvartira::all();

        $home = $request->get("home");

        return ["test" => $home, "all_home" => $all_home, "flats" => $all_flat];
    }
}
