<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jesús Quintana Esquiliche',
            'email' => 'jesquiliche@gmail.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Jesús Quintana',
            'email' => 'jesquiliche@hotmail.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@pruebas.com',
            'password' => Hash::make('password123'),
        ]);

        User::factory(10)->create();
    }
}
