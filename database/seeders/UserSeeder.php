<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::truncate();
      User::create([
        'name' => 'Roys Savela',
        'role' => 'petugas',
        'username' => 'admin',
        'alamat' => 'Krian',
        'jenis_kelamin' => 'L',
        'password' => bcrypt('123'),
        'remember_token' => Str::random(60)
      ]);


      User::create([
        'name' => 'Slamet P',
        'role' => 'admin',
        'username' => 'samix',
        'alamat' => 'Wonokromo',
        'jenis_kelamin' => 'L',
        'password' => bcrypt('123'),
        'remember_token' => Str::random(60)
      ]);
    }
}
