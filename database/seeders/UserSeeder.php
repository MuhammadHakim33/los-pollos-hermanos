<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Cecep Surya Irawan',
            'email' => 'cecep@gmail.com',
            'password' => Hash::make('cecep12345'),
            'phone' => '0884993648',
            'role' => 'user',
            'created_at' => '2024-11-11 11:11:11',
            'updated_at' => '2024-11-11 11:11:11',
        ]);
    }
}
