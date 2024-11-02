<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu')->insert([
            [
                'name' => 'Spaghetti Carbonara',
                'desc' => 'Creamy pasta with bacon and cheese',
                'price' => 40000,
                'path_img' => 'https://images.unsplash.com/photo-1633337474564-1d9478ca4e2e?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'status' => 'available',
            ],
            [
                'name' => 'Caesar Salad',
                'desc' => 'Classic Caesar salad with chicken and parmesan',
                'price' => 14000,
                'path_img' => 'https://images.unsplash.com/photo-1669283714145-f97867f6c238?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'status' => 'available',
            ],
            [
                'name' => 'Margherita Pizza',
                'desc' => 'Classic pizza with tomato, mozzarella, and basil',
                'price' => 150000,
                'path_img' => 'https://images.unsplash.com/photo-1573821663912-6df460f9c684?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'status' => 'available',
            ],
            [
                'name' => 'French Fries',
                'desc' => 'Crispy golden french fries',
                'price' => 20000,
                'path_img' => 'https://plus.unsplash.com/premium_photo-1674498559663-da58647b1834?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'status' => 'empty',
            ]
        ]);
    }
}
