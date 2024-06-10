<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Home::factory()
        //     ->count(5)
        //     ->create();

        $texts = [
            "Kearifan Lokal: Pendekatan Nusantara menekankan pada pemanfaatan bahan-bahan alami dan teknik tradisional, seperti kayu, bambu, dan anyaman, untuk menciptakan karya arsitektur dan interior yang sesuai dengan lingkungan dan budaya setempat.",
            "Budaya dan Identitas: Pendekatan ini memperhatikan nilai-nilai budaya dan identitas lokal, memastikan bahwa desain mencerminkan warisan budaya dan sejarah masyarakat Nusantara.",
            "Integrasi Seni dan Kerajinan: Seni dan kerajinan tangan tradisional sering diintegrasikan dalam desain, baik sebagai dekorasi atau elemen fungsional dalam arsitektur dan interior.",
            "Detail Ornamen: Ornamen-ornamen tradisional seperti ukiran, mozaik, dan hiasan tangan lainnya sering digunakan dalam desain Nusantara untuk memberikan sentuhan estetika yang khas.",
            "Penggunaan Ruang Terbuka: Desain interior Nusantara cenderung mengedepankan penggunaan ruang terbuka dan tata letak yang mengakomodasi aliran udara dan cahaya alami.",
            "Interaksi Dengan Alam: Desain Nusantara sering memasukkan elemen alam, seperti taman dalam rumah atau kolam renang alami, yang memungkinkan penghuni berinteraksi lebih dekat dengan lingkungan sekitar.",
            "Adaptasi Modern: Meskipun mengandalkan warisan tradisional, pendekatan Nusantara juga bisa menggabungkan elemen-elemen modern untuk menciptakan desain yang harmonis antara masa lalu dan masa kini.",
            "Kehangatan dan Kenyamanan: Sentuhan hangat dan kenyamanan sering menjadi fokus dalam desain Nusantara, menciptakan ruang yang mengundang dan ramah.",
            "Diversitas Regional: Pendekatan Nusantara tidak monolitik, karena setiap wilayah memiliki karakteristik budaya dan lingkungan yang berbeda. Ini menciptakan ruang bagi variasi dalam desain yang mencerminkan keragaman Indonesia.",
            "Keberlanjutan: Desain Nusantara cenderung berfokus pada praktik berkelanjutan, mengintegrasikan elemen-elemen ramah lingkungan seperti penggunaan energi terbarukan dan sistem pencahayaan alami.",
        ];

        $images = [
            "https://res.cloudinary.com/djzee3t99/image/upload/v1707094736/ddn/img/slide/slide-10.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1707094735/ddn/img/slide/slide-9.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1707094734/ddn/img/slide/slide-6.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1707094734/ddn/img/slide/slide-8.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1707094733/ddn/img/slide/slide-4.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1707094732/ddn/img/slide/slide.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1707094732/ddn/img/slide/slide-7.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1707094728/ddn/img/slide/slide-2.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1707094725/ddn/img/slide/slide-3.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1707094729/ddn/img/slide/slide-5.png"
        ];

        // foreach ($texts as $index => $text) {
        //     Home::create([
        //         'name' => 'Nusantara',
        //         'text' => $text,
        //         'imgurl' => $images[$index % count($images)],
        //     ]);
        // }
    }
}