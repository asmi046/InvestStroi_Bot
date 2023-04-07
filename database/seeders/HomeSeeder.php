<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

use DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Storage::disk('public')->put("engelsa.webp", file_get_contents(public_path('img/home_select/engelsa.webp')), 'public');
        Storage::disk('public')->put("orel.webp", file_get_contents(public_path('img/home_select/orel.webp')), 'public');

        $main_data = [
            [
                'title' => 'Энгельса 142а',
                'addres' => 'г. Курск, Энгельса 142а',
                'flors'=> 10,
                'img' => Storage::url("engelsa.webp")
            ],

            [
                'title' => 'Энгельса 142а',
                'addres' => 'г. Орел, Энгельса 142а',
                'flors'=> 10,
                'img' => Storage::url("orel.webp")
            ],
        ];

        DB::table("homes")->insert($main_data);
    }
}
