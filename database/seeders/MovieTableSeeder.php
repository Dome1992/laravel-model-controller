<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//IMPORTARE IL MODELS MOVIE
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // STO CREANDO  20 NUOVI ELEMENTI NELLA TABELLA comics DEL MIO DATABASE
        Movie::factory()->count(20)->create();
    }
}
