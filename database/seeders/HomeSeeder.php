<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        $main_data = [
            [
                'title' => 'Энгельса 142а',
                'addres' => 'г. Курск, Энгельса 142а',
                'flors'=> 10,
            ],
        ];

        DB::table("homes")->insert($main_data);
    }
}
