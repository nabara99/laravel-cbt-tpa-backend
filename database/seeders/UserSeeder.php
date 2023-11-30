<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \app\Models\User::create([
            'name' => 'Taufiq',
            'email' => 'rtaufiq212@gmail.com',
            'password' => Hash::make('123456'),
            'roles' => 'admin',
            'phone' => '082281593409',
        ]);
    }
}
