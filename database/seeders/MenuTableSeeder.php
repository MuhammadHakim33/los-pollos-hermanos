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
            [
                'name' => 'Kombo Ber-7',
                'path_img' => 'https://cdn.discordapp.com/attachments/1194281684548452402/1386613630195470377/UsNMfIxcPrL0HU0I85uy.png?ex=685c5253&is=685b00d3&hm=65f37160ef23c56a55ac5b68986f0185e684a7e3112b63f3ae6a4770e450a595&',
                'desc' => '7 Ayam + 5 Nasi/Kentang + 5 Minum ',
                'price' => 140000,
                'category' => 'kombo',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ayam Goreng Saus Pedas',
                'path_img' => 'https://cdn.discordapp.com/attachments/1194281684548452402/1386613461202767883/raw.png?ex=685c522b&is=685b00ab&hm=a0402a94e1cebeedbe00a2ca47ba0fa1ba2d25dec340e92958bf75b2ae33f7e6&',
                'desc' => '1 Ayam goreng pedas',
                'price' => 16000,
                'category' => 'ayam',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Eskrim vanilla',
                'path_img' => 'https://cdn.discordapp.com/attachments/1194281684548452402/1386614853946572882/image.png?ex=685c5377&is=685b01f7&hm=fe407982d3c5581384eb6b5e2b287410c740882a1ef61498c8c51c32fcb85020&',
                'desc' => 'Es krim rasa vanilla ',
                'price' => 6000,
                'category' => 'eskrim',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Eskrim coklat',
                'path_img' => 'https://cdn.discordapp.com/attachments/1194281684548452402/1386615539434127400/image.png?ex=685c541a&is=685b029a&hm=b4496fcc8377f7bc080ece45546904b29a061494dbd7e92b00d023d5226167bc&',
                'desc' => 'Es krim rasa coklat',
                'price' => 6000,
                'category' => 'eskrim',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Eskrim vanilla & coklat',
                'path_img' => 'https://cdn.discordapp.com/attachments/1194281684548452402/1386615952052850783/image.png?ex=685c547d&is=685b02fd&hm=c1aaa87046c745cd8a1f3fd703abf037f1f75fe728062de84389c596913853e6&',
                'desc' => 'Es krim rasa vanilla dan coklat',
                'price' => 7000,
                'category' => 'eskrim',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Burger ayam',
                'path_img' => 'https://cdn.discordapp.com/attachments/1194281684548452402/1386617744656699564/q37X03Mb7vOsvq7O7OcM.png?ex=685c5628&is=685b04a8&hm=1001189e4a553e8841f294d1e79ed359e4206192b2ede0c4bd4612f832655c64&',
                'desc' => 'Roti burger lembut berisi daging ayam crispy',
                'price' => 11000,
                'category' => 'burger',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Burger ayam pedas',
                'path_img' => 'https://cdn.discordapp.com/attachments/1194281684548452402/1386617811589136534/AABttNcZpf9MuneG7NPp.png?ex=685c5638&is=685b04b8&hm=3c090e868d0d83757a0a019e500facf655ecc18fa773fec1be361be7a7215877&',
                'desc' => 'Burger ayam pedas dengan taburan bubuk cabai',
                'price' => 12000,
                'category' => 'burger',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Burger classic ',
                'path_img' => 'https://cdn.discordapp.com/attachments/1194281684548452402/1386617917285859409/eY29naPEnSvHTZkUm6oq.png?ex=685c5651&is=685b04d1&hm=8d5ac55cebdcf7461b7756e2d05a8e7d9cc294cc32cbf9f192fec05f0e77bc85&',
                'desc' => 'Burger lembut berisi patty daging sapi ',
                'price' => 13000,
                'category' => 'burger',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Cheese burger',
                'path_img' => 'https://cdn.discordapp.com/attachments/1194281684548452402/1386618005152075866/CSzGDTewk3JMiBAvWRxj.png?ex=685c5666&is=685b04e6&hm=9a486c5ccf8efca635dae1d306a8f8d9336e2faaa1d9d2f1a3dcd8ab273d3f29&',
                'desc' => 'Burger patty sapi dengan keju yang meleleh',
                'price' => 14000,
                'category' => 'burger',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chicken wings ',
                'path_img' => 'https://cdn.discordapp.com/attachments/1194281684548452402/1386706937407864833/raw.png?ex=685ca939&is=685b57b9&hm=a45eb0ff155f0e6719011fb3e24288e21c37598d103a776f621781d0f833d17f&',
                'desc' => '4 pcs sayap ayam ',
                'price' => 20000,
                'category' => 'camilan',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Spicy chicken wings',
                'path_img' => 'https://cdn.discordapp.com/attachments/1194281684548452402/1386706943980081162/raw.png?ex=685ca93b&is=685b57bb&hm=1c4dd8899843e56d96d25847735c896792daa50d34fd2a98a395dbac9f0ef19c&',
                'desc' => '4 pcs sayap ayam pedas',
                'price' => 22000,
                'category' => 'camilan',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
