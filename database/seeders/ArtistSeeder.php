<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       DB::table('artists')->insert([
           'artist_name'=>'uverworld',
           'formation_date'=>'2000-06-06',
           'artist_explanation'=>'siga rockband',
           'created_at'=>new DateTime(),
           'updated_at'=>new DateTime(),
           ]);
    }
}
