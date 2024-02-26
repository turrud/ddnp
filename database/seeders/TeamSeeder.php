<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Team::factory()
        //     ->count(5)
        //     ->create();

        $images = [
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606456/ddn/img/team/id-ghazy.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606455/ddn/img/team/id-inggi.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606456/ddn/img/team/id-fatur.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606457/ddn/img/team/id-sadida.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606457/ddn/img/team/id-zalfa.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606456/ddn/img/team/id-dinda.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606455/ddn/img/team/id-bimo.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606455/ddn/img/team/id-anggi.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606454/ddn/img/team/id-dandi.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606457/ddn/img/team/id-rivan.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606457/ddn/img/team/id-tazkia.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606456/ddn/img/team/id-rico.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606969/ddn/img/team/id-nur.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606968/ddn/img/team/id-imam.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606967/ddn/img/team/id-fikri.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606966/ddn/img/team/id-faradilah.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606966/ddn/img/team/id-toya.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606966/ddn/img/team/id-cindy.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606965/ddn/img/team/id-gilang.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708606965/ddn/img/team/id-rifqi.png"

        ];

        foreach ($images as $index => $imgurl) {
            Team::create([
                'imgurl' => $images[$index % count($images)],
            ]);
        }
    }
}