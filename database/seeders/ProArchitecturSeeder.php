<?php

namespace Database\Seeders;

use App\Models\ProArchitectur;
use Illuminate\Database\Seeder;

class ProArchitecturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ProArchitectur::factory()
        //     ->count(5)
        //     ->create();

        $images = [
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600467/ddn/img/architecture-design/architecture.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600468/ddn/img/architecture-design/architecture-2.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600468/ddn/img/architecture-design/architecture-3.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600468/ddn/img/architecture-design/architecture-4.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600469/ddn/img/architecture-design/architecture-5.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600469/ddn/img/architecture-design/architecture-6.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600469/ddn/img/architecture-design/architecture-7.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600470/ddn/img/architecture-design/architecture-8.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600470/ddn/img/architecture-design/architecture-9.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600470/ddn/img/architecture-design/architecture-10.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600471/ddn/img/architecture-design/architecture-11.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600471/ddn/img/architecture-design/architecture-12.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600472/ddn/img/architecture-design/architecture-13.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600472/ddn/img/architecture-design/architecture-14.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600472/ddn/img/architecture-design/architecture-15.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600473/ddn/img/architecture-design/architecture-16.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600474/ddn/img/architecture-design/architecture-17.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600474/ddn/img/architecture-design/architecture-18.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600474/ddn/img/architecture-design/architecture-19.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600475/ddn/img/architecture-design/architecture-20.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600476/ddn/img/architecture-design/architecture-21.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600476/ddn/img/architecture-design/architecture-22.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600477/ddn/img/architecture-design/architecture-23.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600477/ddn/img/architecture-design/architecture-24.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600477/ddn/img/architecture-design/architecture-25.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600478/ddn/img/architecture-design/architecture-26.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600479/ddn/img/architecture-design/architecture-27.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600479/ddn/img/architecture-design/architecture-28.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600480/ddn/img/architecture-design/architecture-29.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600480/ddn/img/architecture-design/architecture-30.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600480/ddn/img/architecture-design/architecture-31.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600481/ddn/img/architecture-design/architecture-32.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600482/ddn/img/architecture-design/architecture-33.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600482/ddn/img/architecture-design/architecture-34.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600483/ddn/img/architecture-design/architecture-35.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600483/ddn/img/architecture-design/architecture-36.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600484/ddn/img/architecture-design/architecture-37.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600484/ddn/img/architecture-design/architecture-38.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600485/ddn/img/architecture-design/architecture-39.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600485/ddn/img/architecture-design/architecture-40.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600486/ddn/img/architecture-design/architecture-41.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600487/ddn/img/architecture-design/architecture-42.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600487/ddn/img/architecture-design/architecture-43.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600488/ddn/img/architecture-design/architecture-44.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600489/ddn/img/architecture-design/architecture-45.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600489/ddn/img/architecture-design/architecture-46.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600490/ddn/img/architecture-design/architecture-47.jpg"

        ];

        // foreach ($images as $index => $imgurl) {
        //     ProArchitectur::create([
        //         'imgurl' => $images[$index % count($images)]
        //     ]);
        // }
    }
}