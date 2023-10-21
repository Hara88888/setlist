<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('venues')->insert([
           'venue_name'=>'TOKYODOME',
           'venue_capacity'=>45000,
           'venue_explanation'=>'tokyo',
           'created_at'=>new DateTime(),
           'updated_at'=>new DateTime(),
           ]);
    }
}
