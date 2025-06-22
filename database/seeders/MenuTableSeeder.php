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
            // [
            //     'name' => 'Gudeg',
            //     'desc' => 'Cita rasa yang manis khas Jogjakarta ditemani dengan telur bulat yang lezat',
            //     'price' => 20000,
            //     'path_img' => 'download (1).jpg',
            //     'category' => 'food',
            //     'status' => 'available',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'name' => 'Krecek',
            //     'desc' => 'Rasa gurih dan pedas yang pas dengan kacang tanah yang lezat',
            //     'price' => 20000,
            //     'path_img' => 'download (2).jpg',
            //     'category' => 'food',
            //     'status' => 'available',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'name' => 'Mie Ayam Pangsit',
            //     'desc' => 'Mie kenyal dengan kuah gurih ditabur irisan daging ayam yang manis dan kerupuk pangsit yang renyah',
            //     'price' => 18000,
            //     'path_img' => 'download (3).jpg',
            //     'category' => 'food',
            //     'status' => 'available',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'name' => 'Bakso Sapi',
            //     'desc' => 'Olahan daging sapi yang lezat dengan tetelan dan bihun/mie sebagai pelengkap. Tersedia berbagai pilihan Bakso Urat/Telor/Beranak',
            //     'price' => 21000,
            //     'path_img' => 'download (4).jpg',
            //     'category' => 'food',
            //     'status' => 'available',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'name' => 'Rendang',
            //     'desc' => 'Daging sapi dengan bumbu khas Minangkabau yang lezat, empuk, dan pedas',
            //     'price' => 14000,
            //     'path_img' => 'download (5).jpg',
            //     'category' => 'food',
            //     'status' => 'available',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'name' => 'Ikan Gurame 1 ekor',
            //     'desc' => 'Ikan air tawar yang fresh disajikan dengan berbagai pilihan Asam manis, Bakar, Goreng, Gulai, dan Kuah Asam',
            //     'price' => 98000,
            //     'path_img' => 'download (6).jpg',
            //     'category' => 'food',
            //     'status' => 'available',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'name' => 'Ayam Kampung 1 ekor',
            //     'desc' => 'Ayam kampung yang lezat dan lembut disajikan berbagai pilihan Goreng, Bakar, Gulai, dan Opor. Bisa request dipotong-potong/utuh',
            //     'price' => 86000,
            //     'path_img' => 'download (7).jpg',
            //     'category' => 'food',
            //     'status' => 'available',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'name' => 'Cah Kangkung',
            //     'desc' => 'Rasa gurih dengan irisan cabai diatasnya yang menambah cita rasanya',
            //     'price' => 15000,
            //     'path_img' => 'download (8).jpg',
            //     'category' => 'food',
            //     'status' => 'available',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'name' => 'Sop Ayam',
            //     'desc' => 'Sop ayam disajikan dengan rasa gurih dan nikmat yang menghangatkan badan',
            //     'price' => 20000,
            //     'path_img' => 'download (9).jpg',
            //     'category' => 'food',
            //     'status' => 'available',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'name' => 'Sop Kambing',
            //     'desc' => 'Sop kambing disajikan dengan rasa gurih dan nikmat yang menghangatkan badan',
            //     'price' => 22000,
            //     'path_img' => 'download (10).jpg',
            //     'category' => 'food',
            //     'status' => 'available',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'name' => 'Teh (Tawar/Manis)',
            //     'desc' => 'Teh tawar atau manis yang menyegarkan tubuh, bisa disajikan dingin',
            //     'price' => 5000,
            //     'path_img' => 'download (11).jpg',
            //     'category' => 'drink',
            //     'status' => 'available',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'name' => 'Perasan Jeruk (Panas/Dingin)',
            //     'desc' => 'Minuman perasan jeruk yang segar dan manis, bisa request pakai gula atau tidak',
            //     'price' => 12000,
            //     'path_img' => 'download (1).jpg',
            //     'category' => 'drink',
            //     'status' => 'available',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'name' => 'Jus Sirsak',
            //     'desc' => 'Buah sirsak pilihan disajikan dengan cara di jus agar segar dan lezat',
            //     'price' => 12000,
            //     'path_img' => 'download (2).jpg',
            //     'category' => 'drink',
            //     'status' => 'available',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'name' => 'Jus Mangga',
            //     'desc' => 'Buah mangga pilihan disajikan dengan cara di jus agar segar dan lezat',
            //     'price' => 12000,
            //     'path_img' => 'download (3).jpg',
            //     'category' => 'drink',
            //     'status' => 'available',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'name' => 'Sop Buah',
            //     'desc' => 'Buah-buahan seperti anggur, buah naga, leci, apel, melon, alpukat, pear, stoberi, dan mangga yang disajikan dalam 1 wadah dengan es batu, susu, dan sirup agar lebih segar dan lezat',
            //     'price' => 25000,
            //     'path_img' => 'download (4).jpg',
            //     'category' => 'drink',
            //     'status' => 'available',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ]

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
                'name' => 'Kombo Ber-7',
                'path_img' => 'https://d2vuyvo9qdtgo9.cloudfront.net/foods/October2023/UF2gdIf2F5V2J7T3OrmJ.webp',
                'desc' => '7 Ayam + 5 Nasi/Kentang + 5 Minum ',
                'price' =>  140000,
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
            [
                'name' => 'Ayam Goreng Saus Pedas',
                'path_img' => 'https://static.vecteezy.com/system/resources/previews/002/949/889/non_2x/fried-chicken-with-spicy-sauce-in-korean-style-free-photo.jpg',
                'desc' => 'ayam goreng saus 1 pcs',
                'price' => 16000,
                'category' => 'ayam',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chicken Wings',
                'path_img' => 'https://media.istockphoto.com/id/1441046197/id/foto/kaki-ayam-goreng-jatuh-di-udara-terisolasi-di-atas-putih.jpg?s=612x612&w=0&k=20&c=Ckg8MQLVJJhEUGsqegD1l11Jx54OF7MhNCftjWBzoYQ=',
                'desc' => 'sayap ayam goreng 4pcs',
                'price' => 20000,
                'category' => 'cemilan',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chicken Wings',
                'path_img' => 'https://thumbs.dreamstime.com/b/top-view-crispy-fried-chicken-wing-isolated-over-white-39403041.jpg',
                'desc' => 'sayap ayam goreng 4pcs',
                'price' => 20000,
                'category' => 'cemilan',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kentang Goreng',
                'path_img' => 'https://t3.ftcdn.net/jpg/05/34/72/82/360_F_534728237_3z10vMyiQ0XNJEk0v1YhMt8f4B5LaELi.jpg',
                'desc' => 'kentang goreng 20pcs',
                'price' => 8000,
                'category' => 'cemilan',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
