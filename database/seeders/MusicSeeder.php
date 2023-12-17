<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('musics')->insert([
           'artist_id'=>1,
        //   'category_id'=>1,
           'music_name'=>'0choir',
           'release_date'=>'2000-11-24',
           'music_explanation'=>'アルバム代表曲',
           'created_at'=>new DateTime(),
           'updated_at'=>new DateTime(),
           ]);
    }
}
