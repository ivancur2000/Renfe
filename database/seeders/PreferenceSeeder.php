<?php

namespace Database\Seeders;

use App\Models\Preference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Preference::create([
        'name' => 'Ruta corta',
        'code' => 'corta'
      ]);
      Preference::create([
        'name' => 'Ruta larga',
        'code' => 'larga'
      ]);
      Preference::create([
        'name' => 'Con animales',
        'code' => 'animal'
      ]);
      Preference::create([
        'name' => 'Mayormente soleado',
        'code' => 'soleado'
      ]);
      Preference::create([
        'name' => 'Ruta tranquila',
        'code' => 'relajada'
      ]);
      Preference::create([
        'name' => 'Ruta vacia',
        'code' => 'vacia'
      ]);
    }
}
