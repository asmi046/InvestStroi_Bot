<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\Storage;

use DB;

class KvartiraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Storage::disk('public')->put("home_v_1.jpg", file_get_contents(public_path('facer/home_v_1.jpg')), 'public');
        Storage::disk('public')->put("home_v_2.jpg", file_get_contents(public_path('facer/home_v_2.jpg')), 'public');

        $files = base_path() . '/public/base/hometable_2.csv';

        if (($handle = fopen($files, "r")) !== FALSE) {
            echo  $files."\n\r";
            $row = 0;
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                if ($row == 0) {$row++; continue;}
                if (empty($data[0])) break;

                $type = "1 комната";

                if ($data[1] == 'C') $type = "Студия";
                if ($data[1] == 'E2') $type = "2 комнаты (Евро)";
                if ($data[1] == 'E3') $type = "3 комнаты (Евро)";


                $main_data[] =
                    [
                        'type' => $type,
                        'number' => floatval($data[0]),
                        'area' => floatval($data[2]),
                        'area_live' => floatval($data[3]),
                        'flor' => intval($data[5]),
                        'rooms' => intval($data[4]),
                        'plan_img' => "",
                        'home_1_img' => Storage::url("home_v_1.jpg"),
                        'home_2_img' => Storage::url("home_v_2.jpg"),
                        'koridor_img' => "",
                        'home_id' => 1,
                    ];


            }

            DB::table("kvartiras")->insert($main_data);
        }
    }
}
