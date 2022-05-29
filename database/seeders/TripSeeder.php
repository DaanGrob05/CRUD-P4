<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trips')->insert([
            'startDate' => date('2022-10-10'),
            'endDate' => date('2022-10-5'),
            'price' => 100.0,
            'description' => "Leuke reis",
            'hotel' => "Hotel",
        ]);

        DB::table('trips')->insert([
            'startDate' => date('2022-09-22'),
            'endDate' => date('2022-09-29'),
            'price' => 670.5,
            'description' => "Echt een geweldige reis",
            'hotel' => "Ander hotel dan die van hierboven",
        ]);

        DB::table('trips')->insert([
            'startDate' => date('2022-05-02'),
            'endDate' => date('2022-06-02'),
            'price' => 1060.0,
            'description' => "Lange reis",
            'hotel' => "Hotel",
        ]);

        DB::table('trips')->insert([
            'startDate' => date('2022-02-05'),
            'endDate' => date('2022-10-5'),
            'price' => 5000.0,
            'description' => "Broer kapot lange reis",
            'hotel' => "Ja met hotel",
        ]);

        DB::table('trips')->insert([
            'startDate' => date('2022-09-10'),
            'endDate' => date('2022-09-15'),
            'price' => 450.0,
            'description' => "Goedkope reis",
            'hotel' => "Hotel",
        ]);
    }
}
