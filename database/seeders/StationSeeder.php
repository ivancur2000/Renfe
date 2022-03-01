<?php

namespace Database\Seeders;

use App\Models\Line;
use App\Models\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $line = Line::all();
      Station::create([
        'name' => 'Estacion Carachacumba',
        'code' => 'CRBM',
        'address' => 'Villa Carachacumba',
        'price' => 20,
        'schedule' => 'Lunes a viernes de 8:00 a 20:00, fines de semana de 9:00 a 16:00',
        'line_id' => $line->random()->id
      ]);
      Station::create([
        'name' => 'Estacion del libertador',
        'code' => 'LBT',
        'address' => 'Plaza del libertador',
        'price' => 20,
        'schedule' => 'Lunes a viernes de 8:00 a 20:00, fines de semana de 9:00 a 16:00',
        'line_id' => $line->random()->id
      ]);
      Station::create([
        'name' => 'Estacion San Juan de Dios',
        'code' => 'SJD',
        'address' => 'Calle San Juan de Dios',
        'price' => 20,
        'schedule' => 'Lunes a viernes de 8:00 a 20:00, fines de semana de 9:00 a 16:00',
        'line_id' => $line->random()->id
      ]);
    }
}
