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
                'name' => 'Gudeg',
                'desc' => 'Cita rasa yang manis khas Jogjakarta ditemani dengan telur bulat yang lezat',
                'price' => 20000,
                'path_img' => 'download (1).jpg',
                'category' => 'food',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Krecek',
                'desc' => 'Rasa gurih dan pedas yang pas dengan kacang tanah yang lezat',
                'price' => 20000,
                'path_img' => 'download (2).jpg',
                'category' => 'food',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mie Ayam Pangsit',
                'desc' => 'Mie kenyal dengan kuah gurih ditabur irisan daging ayam yang manis dan kerupuk pangsit yang renyah',
                'price' => 18000,
                'path_img' => 'download (3).jpg',
                'category' => 'food',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bakso Sapi',
                'desc' => 'Olahan daging sapi yang lezat dengan tetelan dan bihun/mie sebagai pelengkap. Tersedia berbagai pilihan Bakso Urat/Telor/Beranak',
                'price' => 21000,
                'path_img' => 'download (4).jpg',
                'category' => 'food',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Rendang',
                'desc' => 'Daging sapi dengan bumbu khas Minangkabau yang lezat, empuk, dan pedas',
                'price' => 14000,
                'path_img' => 'download (5).jpg',
                'category' => 'food',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ikan Gurame 1 ekor',
                'desc' => 'Ikan air tawar yang fresh disajikan dengan berbagai pilihan Asam manis, Bakar, Goreng, Gulai, dan Kuah Asam',
                'price' => 98000,
                'path_img' => 'download (6).jpg',
                'category' => 'food',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ayam Kampung 1 ekor',
                'desc' => 'Ayam kampung yang lezat dan lembut disajikan berbagai pilihan Goreng, Bakar, Gulai, dan Opor. Bisa request dipotong-potong/utuh',
                'price' => 86000,
                'path_img' => 'download (7).jpg',
                'category' => 'food',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Cah Kangkung',
                'desc' => 'Rasa gurih dengan irisan cabai diatasnya yang menambah cita rasanya',
                'price' => 15000,
                'path_img' => 'download (8).jpg',
                'category' => 'food',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sop Ayam',
                'desc' => 'Sop ayam disajikan dengan rasa gurih dan nikmat yang menghangatkan badan',
                'price' => 20000,
                'path_img' => 'download (9).jpg',
                'category' => 'food',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sop Kambing',
                'desc' => 'Sop kambing disajikan dengan rasa gurih dan nikmat yang menghangatkan badan',
                'price' => 22000,
                'path_img' => 'download (10).jpg',
                'category' => 'food',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Teh (Tawar/Manis)',
                'desc' => 'Teh tawar atau manis yang menyegarkan tubuh, bisa disajikan dingin',
                'price' => 5000,
                'path_img' => 'download (11).jpg',
                'category' => 'drink',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Perasan Jeruk (Panas/Dingin)',
                'desc' => 'Minuman perasan jeruk yang segar dan manis, bisa request pakai gula atau tidak',
                'price' => 12000,
                'path_img' => 'download (1).jpg',
                'category' => 'drink',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Jus Sirsak',
                'desc' => 'Buah sirsak pilihan disajikan dengan cara di jus agar segar dan lezat',
                'price' => 12000,
                'path_img' => 'download (2).jpg',
                'category' => 'drink',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Jus Mangga',
                'desc' => 'Buah mangga pilihan disajikan dengan cara di jus agar segar dan lezat',
                'price' => 12000,
                'path_img' => 'download (3).jpg',
                'category' => 'drink',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sop Buah',
                'desc' => 'Buah-buahan seperti anggur, buah naga, leci, apel, melon, alpukat, pear, stoberi, dan mangga yang disajikan dalam 1 wadah dengan es batu, susu, dan sirup agar lebih segar dan lezat',
                'price' => 25000,
                'path_img' => 'download (4).jpg',
                'category' => 'drink',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
