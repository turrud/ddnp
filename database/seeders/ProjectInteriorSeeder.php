<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProjectInterior;

class ProjectInteriorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ProjectInterior::factory()
        //     ->count(5)
        //     ->create();

        $images = [
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600405/ddn/img/interior-design/interior.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600405/ddn/img/interior-design/interior-2.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600405/ddn/img/interior-design/interior-3.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600405/ddn/img/interior-design/interior-4.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600405/ddn/img/interior-design/interior-7.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600405/ddn/img/interior-design/interior-8.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600406/ddn/img/interior-design/interior-5.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600406/ddn/img/interior-design/interior-6.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600407/ddn/img/interior-design/interior-9.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600407/ddn/img/interior-design/interior-10.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600407/ddn/img/interior-design/interior-12.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600408/ddn/img/interior-design/interior-11.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600408/ddn/img/interior-design/interior-13.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600408/ddn/img/interior-design/interior-14.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600408/ddn/img/interior-design/interior-15.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600408/ddn/img/interior-design/interior-16.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600409/ddn/img/interior-design/interior-17.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600409/ddn/img/interior-design/interior-18.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600410/ddn/img/interior-design/interior-19.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600410/ddn/img/interior-design/interior-20.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600410/ddn/img/interior-design/interior-21.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600410/ddn/img/interior-design/interior-22.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600410/ddn/img/interior-design/interior-23.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600410/ddn/img/interior-design/interior-24.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600411/ddn/img/interior-design/interior-25.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600411/ddn/img/interior-design/interior-26.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600411/ddn/img/interior-design/interior-27.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600412/ddn/img/interior-design/interior-28.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600412/ddn/img/interior-design/interior-29.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600414/ddn/img/interior-design/interior-30.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600415/ddn/img/interior-design/interior-31.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600415/ddn/img/interior-design/interior-32.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600415/ddn/img/interior-design/interior-33.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600415/ddn/img/interior-design/interior-34.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600416/ddn/img/interior-design/interior-35.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600416/ddn/img/interior-design/interior-36.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600417/ddn/img/interior-design/interior-37.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600417/ddn/img/interior-design/interior-38.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600418/ddn/img/interior-design/interior-39.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708600418/ddn/img/interior-design/interior-40.png"
        ];

        foreach ($images as $index => $imgurl) {
            ProjectInterior::create([
                'imgurl' => $images[$index % count($images)]
            ]);
        }
    }
}
