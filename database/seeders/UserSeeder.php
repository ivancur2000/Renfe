<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = User::create([
        'name' => 'Ivan',
        'email' => 'ivan@gmail.com',
        'password' => Hash::make('holamundo123')
      ]);

      $user2 = User::create([
        'name' => 'Male15',
        'email' => 'male15@gmail.com',
        'password' => Hash::make('123456789')
      ]);

      $role = Role::create(['name'=> 'Admin']);
      $role2 = Role::create(['name'=> 'Usuario']);
      $permission = Permission::create(['name' => 'admin panel']);
      $role->givePermissionTo($permission);
      $user->assignRole('Admin');
      $user2->assignRole('Admin');
    }
}
