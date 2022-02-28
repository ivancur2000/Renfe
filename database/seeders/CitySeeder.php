<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cities')->insert([
        'name' => 'La Paz',
        'code' => 'LP'
      ]);
      DB::table('cities')->insert([
        'name' => 'Santa Cruz',
        'code' => 'SC'
      ]);
      DB::table('cities')->insert([
        'name' => 'Chuquisaca',
        'code' => 'CH'
      ]);
      DB::table('cities')->insert([
        'name' => 'Beni',
        'code' => 'BN'
      ]);
    }
}
