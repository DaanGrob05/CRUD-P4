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
            'trip_name' => 'one-way trip to Paris',
            'start_location' => 'Shiphol',
            'destination' => 'Paris',
            'type_of_trip' => 0,
            'small_description' => 'wonderful trip to Paris around all kinds of sights',
            'full_description' => 'wonderful trip to Paris around all kinds of sights blah blah blah blah',
            'startDate' => date('2022-10-10'),
            'endDate' => date('2022-10-5'),
            'price' => 100.0,
            'hotel' => "Hotel",
        ]);

        DB::table('trips')->insert([
            'trip_name' => 'one-way trip to London',
            'start_location' => 'Shiphol',
            'destination' => 'London',
            'type_of_trip' => 0,
            'small_description' => 'wonderful trip to London around all kinds of sights',
            'full_description' => 'wonderful trip to London around all kinds of sights blah blah blah blah',
            'startDate' => date('2022-10-10'),
            'endDate' => date('2022-10-5'),
            'price' => 100.0,
            'hotel' => "Hotel",
        ]);

        DB::table('trips')->insert([
            'trip_name' => 'one-way trip to Rome',
            'start_location' => 'Shiphol',
            'destination' => 'Rome',
            'type_of_trip' => 0,
            'small_description' => 'wonderful trip to Rome around all kinds of sights',
            'full_description' => 'wonderful trip to Rome around all kinds of sights blah blah blah blah',
            'startDate' => date('2022-10-10'),
            'endDate' => date('2022-10-5'),
            'price' => 100.0,
            'hotel' => "Hotel",
        ]);

        DB::table('trips')->insert([
            'trip_name' => 'one-way trip to Berlin',
            'start_location' => 'Shiphol',
            'destination' => 'Berlin',
            'type_of_trip' => 0,
            'small_description' => 'wonderful trip to Berlin around all kinds of sights',
            'full_description' => 'wonderful trip to Berlin around all kinds of sights blah blah blah blah',
            'startDate' => date('2022-10-10'),
            'endDate' => date('2022-10-5'),
            'price' => 100.0,
            'hotel' => "Hotel",
        ]);

        DB::table('trips')->insert([
            'trip_name' => 'one-way trip to tokyo',
            'start_location' => 'Shiphol',
            'destination' => 'tokyo',
            'type_of_trip' => 0,
            'small_description' => 'wonderful trip to tokyo around all kinds of sights',
            'full_description' => 'wonderful trip to tokyo around all kinds of sights blah blah blah blah',
            'startDate' => date('2022-10-10'),
            'endDate' => date('2022-10-5'),
            'price' => 100.0,
            'hotel' => "Hotel",
        ]);
    }
}
