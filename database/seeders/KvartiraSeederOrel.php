<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\Storage;

use DB;

class KvartiraSeederOrel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Storage::disk('public')->put("home_v_1_orel.jpg", file_get_contents(public_path('facer/home_v_1_orel.jpg')), 'public');
        Storage::disk('public')->put("home_v_2_orel.jpg", file_get_contents(public_path('facer/home_v_2_orel.jpg')), 'public');

        $files = base_path() . '/public/base/orel.csv';

        if (($handle = fopen($files, "r")) !== FALSE) {
            echo  $files."\n\r";
            $row = 0;
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                if ($row == 0) {$row++; continue;}
                if (empty($data[0])) break;

                $type = "1 комната";

                if ($data[1] == 'C') $type = "Студия";
                if ($data[1] == 'С') $type = "Студия";
                if ($data[1] == 'E2') $type = "2 комнаты (Евро)";
                if ($data[1] == 'Е2') $type = "2 комнаты (Евро)";
                if ($data[1] == 'E3') $type = "3 комнаты (Евро)";
                if ($data[1] == 'Е3') $type = "3 комнаты (Евро)";
                if ($data[1] == '2') $type = "2 комнаты";
                if ($data[1] == '3') $type = "3 комнаты";
                if ($data[1] == '1') $type = "1 комната";

                $rooms = $data[4];
                if ($rooms == 'С') $rooms = 1;

                Storage::disk('public')->put("orel-krt-".$data[0].".svg", file_get_contents(public_path('planes/orel/'.$data[0].'.svg')), 'public');

                $main_data[] =
                    [
                        'type' => $type,
                        'number' => floatval($data[0]),
                        'price' => floatval(str_replace([" ",".",","], "",trim($data[6]))),
                        'price_metr' => floatval(str_replace([" ",".",","], "",trim($data[7]))),
                        'view' => iconv("windows-1251", "utf-8", $data[8]),
                        'podezd' => iconv("windows-1251", "utf-8", $data[9]),
                        'area' => floatval($data[2]),
                        'area_live' => floatval($data[3]),
                        'flor' => intval($data[5]),
                        'rooms' => intval($rooms),
                        'plan_img' => Storage::url("orel-krt-".$data[0].".svg"),
                        'home_1_img' => Storage::url("home_v_1_orel.jpg"),
                        'home_2_img' => Storage::url("home_v_2_orel.jpg"),
                        'koridor_img' => "",
                        'home_id' => 1,
                    ];


            }

            // var_dump($main_data);
            DB::table("kvartiras")->insert($main_data);
        }
    }
}
