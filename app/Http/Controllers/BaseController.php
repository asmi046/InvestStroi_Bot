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


        $rooms = ($request->get("rooms") !== "Все")?$request->get("rooms"):"%";
        $selectedhome = ($request->get("selectedhome") !== "0")?$request->get("selectedhome"):"%";
        $florot = $request->get("florot");
        $flordo = $request->get("flordo");

        $result = Kvartira::with("home_info")
            ->where("type", "LIKE", $rooms)
            ->where('home_id', "LIKE", $selectedhome)
            ->where("flor", ">=", $florot)
            ->where("flor", "<=", $flordo)
            ->get();

        return ["test" => $rooms, "count" => count($result), "results" => $result];
    }
}
