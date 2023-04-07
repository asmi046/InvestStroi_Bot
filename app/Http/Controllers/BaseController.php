<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kvartira;
use App\Models\Home;



class BaseController extends Controller
{
    public function query(Request $request) {
        $all_home = Home::all();
        $all_flat = Kvartira::all();

        $home = $request->get("home");

        return ["test" => $home, "all_home" => $all_home, "flats" => $all_flat];
    }
}
