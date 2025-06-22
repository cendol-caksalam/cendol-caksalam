<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductModel;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                'name' => 'Cendol Original',
                'desc' => 'Nikmati kesegaran klasik cendol khas Nusantara dengan perpaduan santan gurih, gula merah manis, dan cendol lembut yang menggoda. Cocok untuk segala suasana!',
                'img' => '/img/cendoloriginal.jpg',
                'bg' => 'bg-[#E8F5E9]',
                'color' => 'text-[#2E7D32]',
                'btn' => 'bg-[#2E7D32] hover:bg-[#1b5e20]',
                'price' => 'Rp10.000',
            ],
            [
                'name' => 'Cendol Durian',
                'desc' => 'Rasakan perpaduan legitnya daging durian dengan gurihnya santan dan manisnya gula merah. Paduan rasa unik yang cocok bagi pencinta durian sejati!',
                'img' => '/img/cendoldurian.jpg',
                'bg' => 'bg-[#FFF8E1]',
                'color' => 'text-[#F9A825]',
                'btn' => 'bg-[#F9A825] hover:bg-[#f57f17]',
                'price' => 'Rp15.000',
            ],
            [
                'name' => 'Cendol Alpukat',
                'desc' => 'Rasakan kelembutan alpukat segar yang dipadukan dengan manisnya gula merah dan gurihnya santan. Kombinasi creamy dan menyegarkan dalam satu gelas!',
                'img' => '/img/cendolalpukat.jpeg',
                'bg' => 'bg-[#E8F5E9]',
                'color' => 'text-[#388E3C]',
                'btn' => 'bg-[#388E3C] hover:bg-[#2e7d32]',
                'price' => 'Rp14.000',
            ],
            [
                'name' => 'Cendol Nangka',
                'desc' => 'Aroma khas dan manisnya buah nangka berpadu dengan tekstur lembut cendol, menciptakan cita rasa tropis yang segar dan tak terlupakan.',
                'img' => '/img/cendolnangka.jpg',
                'bg' => 'bg-[#FFF3E0]',
                'color' => 'text-[#EF6C00]',
                'btn' => 'bg-[#EF6C00] hover:bg-[#e65100]',
                'price' => 'Rp13.000',
            ],
            [
                'name' => 'Cendol Coffee',
                'desc' => 'Inovasi rasa baru! Kombinasi cendol tradisional dengan sentuhan kopi premium. Cocok bagi pencinta kopi yang ingin sensasi berbeda.',
                'img' => '/img/cendolcoffee.jpg',
                'bg' => 'bg-[#EFEBE9]',
                'color' => 'text-[#6D4C41]',
                'btn' => 'bg-[#6D4C41] hover:bg-[#4e342e]',
                'price' => 'Rp13.000',
            ],
            [
                'name' => 'Cendol Strawberry',
                'desc' => 'Kesegaran buah strawberry asli dengan sedikit rasa asam manis berpadu dalam cendol lembut dan santan creamy. Segar, unik, dan penuh warna!',
                'img' => '/img/cendolstrawberry.jpg',
                'bg' => 'bg-[#FCE4EC]',
                'color' => 'text-[#D81B60]',
                'btn' => 'bg-[#D81B60] hover:bg-[#ad1457]',
                'price' => 'Rp14.000',
            ],
        ];


        foreach ($menus as $item) {
            ProductModel::create($item);
        }
    }
}
