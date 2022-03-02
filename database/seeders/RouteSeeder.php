<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Route::create([
        'name' => 'Ruta de Carachacumba',
        'code' => 'RCRH',
        'longer' => '2 Km',
        'duration' => '3',
        'description' => 'Ruta tranquila con hermosas vistas',
        'starting_station' => 'Calle Carachacumba',
        'ending_station' => 'Plaza del libertador'
      ]);

      Route::create([
        'name' => 'Ruta Juan Tenorio',
        'code' => 'RJTN',
        'longer' => '1 Km',
        'duration' => '1.5',
        'description' => 'Ruta tranquila con hermosas vistas',
        'starting_station' => 'Calle Carachacumba',
        'ending_station' => 'Plaza del libertador'
      ]);

      Route::create([
        'name' => 'Ruta de San pedro',
        'code' => 'RSPD',
        'longer' => '4 Km',
        'duration' => '5',
        'description' => 'Ruta tranquila con hermosas vistas',
        'starting_station' => 'Calle Carachacumba',
        'ending_station' => 'Plaza del libertador'
      ]);

      Route::create([
        'name' => 'Ruta de Chicaloma',
        'code' => 'RCHL',
        'longer' => '2 Km',
        'duration' => '3',
        'description' => 'Ruta tranquila con hermosas vistas',
        'starting_station' => 'Calle Carachacumba',
        'ending_station' => 'Plaza del libertador'
      ]);
    }
}
