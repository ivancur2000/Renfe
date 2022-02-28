<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Line;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $city = City::all();

      Line::create([
        'name' => 'Linea roja',
        'code' => 'RED',
        'city_id' => $city->random()->id 
      ]);
      
      Line::create([
        'name' => 'Linea verde',
        'code' => 'GREEN',
        'city_id' => $city->random()->id 
      ]);

      Line::create([
        'name' => 'Linea amarrilla',
        'code' => 'YELLOW',
        'city_id' => $city->random()->id 
      ]);

      Line::create([
        'name' => 'Linea azul',
        'code' => 'BLUE',
        'city_id' => $city->random()->id 
      ]);
    }
}
