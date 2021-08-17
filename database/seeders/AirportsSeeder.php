<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('airports')->insert([[
            'code_airport'=>'BSB',
            'name'=>'Lula',
            'city_Id'=>'1'
        ],[
            'code_airport'=>'FOR',
            'name'=>'provisorio',
            'city_id'=>'2'
        ]]);
    }
}
