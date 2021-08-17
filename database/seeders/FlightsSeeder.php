<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flights')->insert([[
            'code_flight'=>'LA4717',
            'airport_origin'=>'Brasilia BSB',
            'airport_destiny'=>'Fortaleza FOR',
            'boarding_time'=>'26 Jun 06:35',
            'departure_time'=>'27 Jun 07:15',
            'airlinecompanie_id'=>'1'
        ]]);
    }
}
