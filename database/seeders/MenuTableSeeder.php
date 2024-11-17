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
                'name' => 'Gudeg',
                'desc' => 'Cita rasa yang manis khas Jogjakarta ditemani dengan telur bulat yang lezat',
                'price' => 20000,
                'path_img' => 'https://i.ytimg.com/vi/ApLNIWYZXdw/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBITxu_xAq9Ir3ELzyOAvBYnGReeA',
                'status' => 'available',
            ],
            [
                'name' => 'Krecek',
                'desc' => 'Rasa gurih dan pedas yang pas dengan kacang tanah yang lezat',
                'price' => 20000,
                'path_img' => '#',
                'status' => 'available',
            ],
            [
                'name' => 'Mie Ayam Pangsit',
                'desc' => 'Mie kenyal dengan kuah gurih ditabur irisan daging ayam yang manis dan kerupuk pangsit yang renyah',
                'price' => 18000,
                'path_img' => '#',
                'status' => 'available',
            ],
            [
                'name' => 'Bakso Sapi',
                'desc' => 'Olahan daging sapi yang lezat dengan tetelan dan bihun/mie sebagai pelengkap. Tersedia berbagai pilihan Bakso Urat/Telor/Beranak',
                'price' => 21000,
                'path_img' => '#',
                'status' => 'available',
            ],
            [
                'name' => 'Rendang',
                'desc' => 'Daging sapi dengan bumbu khas Minangkabau yang lezat, empuk, dan pedas',
                'price' => 14000,
                'path_img' => '#',
                'status' => 'available',
            ],
            [
                'name' => 'Ikan Gurame 1 ekor',
                'desc' => 'Ikan air tawar yang fresh disajikan dengan berbagai pilihan Asam manis, Bakar, Goreng, Gulai, dan Kuah Asam',
                'price' => 98000,
                'path_img' => '#',
                'status' => 'available',
            ],
            [
                'name' => 'Ayam Kampung 1 ekor',
                'desc' => 'Ayam kampung yang lezat dan lembut disajikan berbagai pilihan Goreng, Bakar, Gulai, dan Opor. Bisa request dipotong-potong/utuh',
                'price' => 86000,
                'path_img' => '#',
                'status' => 'available',
            ],
            [
                'name' => 'Cah Kangkung',
                'desc' => 'Rasa gurih dengan irisan cabai diatasnya yang menambah cita rasanya',
                'price' => 15000,
                'path_img' => '#',
                'status' => 'available',
            ],
            [
                'name' => 'Sop Ayam',
                'desc' => 'Sop ayam disajikan dengan rasa gurih dan nikmat yang menghangatkan badan',
                'price' => 20000,
                'path_img' => '#',
                'status' => 'available',
            ],
            [
                'name' => 'Sop Kambing',
                'desc' => 'Sop kambing disajikan dengan rasa gurih dan nikmat yang menghangatkan badan',
                'price' => 22000,
                'path_img' => '#',
                'status' => 'available',
            ],
            [
                'name' => 'Teh (Tawar/Manis)',
                'desc' => 'Teh tawar atau manis yang menyegarkan tubuh, bisa disajikan dingin',
                'price' => 5000,
                'path_img' => '#',
                'status' => 'available',
            ],
            [
                'name' => 'Perasan Jeruk (Panas/Dingin)',
                'desc' => 'Minuman perasan jeruk yang segar dan manis, bisa request pakai gula atau tidak',
                'price' => 12000,
                'path_img' => '#',
                'status' => 'available',
            ],
            [
                'name' => 'Jus Sirsak',
                'desc' => 'Buah sirsak pilihan disajikan dengan cara di jus agar segar dan lezat',
                'price' => 12000,
                'path_img' => '#',
                'status' => 'available',
            ],
            [
                'name' => 'Jus Mangga',
                'desc' => 'Buah mangga pilihan disajikan dengan cara di jus agar segar dan lezat',
                'price' => 12000,
                'path_img' => '#',
                'status' => 'available',
            ],
            [
                'name' => 'Sop Buah',
                'desc' => 'Buah-buahan seperti anggur, buah naga, leci, apel, melon, alpukat, pear, stoberi, dan mangga yang disajikan dalam 1 wadah dengan es batu, susu, dan sirup agar lebih segar dan lezat',
                'price' => 25000,
                'path_img' => '#',
                'status' => 'available',
            ],
        ]);
    }
}
