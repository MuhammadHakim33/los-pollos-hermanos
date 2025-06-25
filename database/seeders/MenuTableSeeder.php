<?php

namespace Database\Seeders;

use App\Models\Menu;
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
        Menu::insert([
            [
                'name' => 'Hemat Super',
                'path_img' => 'https://d2vuyvo9qdtgo9.cloudfront.net/foods/October2023/F5B8jt0X3XgWbd0hNJuK.webp',
                'desc' => '2 Ayam + 1 Nasi + 1 Minum',
                'price' =>  28000,
                'category' => 'hemat',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hemat Special',
                'path_img' => 'https://d2vuyvo9qdtgo9.cloudfront.net/foods/October2023/Mdfc31HLjuorHac10yKX.webp',
                'desc' => '1 Ayam + 1 Nasi + 1 Minum + telur',
                'price' =>  20000,
                'category' => 'hemat',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hemat',
                'path_img' => 'https://d2vuyvo9qdtgo9.cloudfront.net/foods/October2023/zdp0LhOduHDNXVYWILMx.webp',
                'desc' => '1 Ayam + 1 Nasi + 1 Minum ',
                'price' =>  15000,
                'category' => 'hemat',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kombo Kentang',
                'path_img' => 'https://d2vuyvo9qdtgo9.cloudfront.net/foods/October2023/UF2gdIf2F5V2J7T3OrmJ.webp',
                'desc' => '2 Ayam + 1 Kentang + 1 Minum ',
                'price' =>  26000,
                'category' => 'kombo',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kombo Ber-5',
                'path_img' => 'https://d2vuyvo9qdtgo9.cloudfront.net/foods/October2023/FFiKww17L02iCS5zt6wu.webp',
                'desc' => '5 Ayam + 3 Kentang/Nasi + 3 Minum ',
                'price' =>  120000,
                'category' => 'kombo',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' =>'Es Teh Manis',
                'path_img'  =>'https://media.istockphoto.com/id/1984118636/photo/ice-tea-es-teh-on-plastic-cup-to-go.jpg?s=612x612&w=0&k=20&c=V2yHS5Ea91W_rjBf-11BnF9hb0VoMGxUvVIQblJ_dPs=',
                'desc' =>'Es Teh Manis 350ml',
                'price' => 5000,
                'category' =>'minuman',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' =>'Lemon Tea',
                'path_img'  =>'https://media.istockphoto.com/id/1155623658/photo/a-glass-of-frozen-lemon-black-tea-on-a-white-background.jpg?s=612x612&w=0&k=20&c=7iywxLD_Ye_4lfAYzCHWz8dPYi5m1toTuWCx0w2P54g=',
                'desc' =>'Lemon Tea 350ml',
                'price' => 7000,
                'category' =>'minuman',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' =>'Air mineral',
                'path_img'  =>'https://c8.alamy.com/comp/C3PHJM/mineral-water-bottle-C3PHJM.jpg',
                'desc' =>'Air mineral 500ml',
                'price' => 5000,
                'category' =>'minuman',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' =>'Soda',
                'path_img'  =>'https://media.istockphoto.com/id/530428650/photo/cola-glass-with-ice-cubes.jpg?s=612x612&w=0&k=20&c=keqH2KNWHO1sFxtsBfx5EZjyep1CRBHIqwe_ZwxszHc=',
                'desc' =>'Soda 350ml',
                'price' => 8000,
                'category' =>'minuman',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ayam Goreng Original',
                'path_img' => 'https://media.istockphoto.com/id/1441046197/id/foto/kaki-ayam-goreng-jatuh-di-udara-terisolasi-di-atas-putih.jpg?s=612x612&w=0&k=20&c=Ckg8MQLVJJhEUGsqegD1l11Jx54OF7MhNCftjWBzoYQ=',
                'desc' => 'ayam goreng 1 pcs',
                'price' => 11000,
                'category' => 'ayam',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
