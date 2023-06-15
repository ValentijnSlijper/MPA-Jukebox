<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('songs')->insert([
            [
                'name' => 'Waves (ft. Rapper sjors)',
                'artist' => 'Rapper Sjors',
                'duration' => '2:49',
                'genre_id' => 1,
            ],
            [
                'name' => 'Rarri - Choppa',
                'artist' => 'Rarri ft. Sixnine',
                'duration' => '2:27',
                'genre_id' => 2,
            ],
           
        ]);
    }
}
