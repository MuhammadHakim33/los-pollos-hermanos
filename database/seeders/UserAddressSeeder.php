<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_address')->insert([
            'id_user' => 1,
            'kecamatan' => 'Cilandak',
            'kelurahan' => 'Lebak Bulus',
            'detail' => 'Jl Jatibening Raya No.14',
            'created_at' => '2024-11-11 11:11:11',
            'updated_at' => '2024-11-11 11:11:11',
        ]);
    }
}
