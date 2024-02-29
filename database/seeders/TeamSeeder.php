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

        $members = [
            [
                'name' => 'Ahmad Ghazy',
                'jabatan' => 'Interior Designer',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609796/ddn/img/teams/um9nvrts0fmhhlzdp65n.jpg',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Fatur Rahman',
                'jabatan' => '🌏',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609810/ddn/img/teams/htzzbogucskhuam2aeyk.jpg',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Inggi Lestari',
                'jabatan' => 'Commissioner',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609801/ddn/img/teams/bt8xitwiz74k4j9daub3.jpg',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Shafira Nur Qalbi',
                'jabatan' => 'Building Designer',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609790/ddn/img/teams/xrz0efnayossbtuixwp4.png',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Sadida Abdul Ghani',
                'jabatan' => 'Director of Operations',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609800/ddn/img/teams/rgheul5jpzbdn25c1xk3.jpg',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Moch Rifqi Zain',
                'jabatan' => 'U.O Surakarta',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609792/ddn/img/teams/dlfhkpuyppyhoxuzdldc.png',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Rifan',
                'jabatan' => 'Interior Designer',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609799/ddn/img/teams/nasb1numjomcov11k7mh.jpg',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Dinda',
                'jabatan' => 'Interior Designer',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609794/ddn/img/teams/gy4o3o6hjtpldjeh4cku.jpg',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Zalfa S',
                'jabatan' => 'Interior Designer',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609791/ddn/img/teams/gc6ppiu4y7x0ald3due3.jpg',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Tazqi Amalia',
                'jabatan' => 'Building Designer',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609787/ddn/img/teams/hiazsx4o14e1plhruoqs.jpg',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Hauna Aghnia',
                'jabatan' => 'Interior Designer',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609786/ddn/img/teams/d4jzkticjch03xxtpmry.png',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Imam Cowboy',
                'jabatan' => 'Furniture Designer',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609783/ddn/img/teams/rwlgl9que5i0iszahn63.jpg',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Dandi P',
                'jabatan' => 'Interior Designer',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609779/ddn/img/teams/psbxgasmyw4y0hcr6lzm.jpg',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Cindy Pitra Laura',
                'jabatan' => 'Building Designer',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609774/ddn/img/teams/ppelgcq8hf3ky52oe2se.jpg',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Fikri Ajani',
                'jabatan' => 'Furniture Designer',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609777/ddn/img/teams/qp7uk1uyy8lfnlb3nira.jpg',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Faradilah zalzabilah A.S',
                'jabatan' => 'Interior Designer',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609777/ddn/img/teams/xq8osp5or8pljupscmny.jpg',
                'text' => 'bla bla'
            ],

            [
                'name' => 'Fadillah Nur Asyifa',
                'jabatan' => 'Building Designer',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609780/ddn/img/teams/hfjxjwvxe5sg7p5gpvt0.jpg',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Raden Mas Atthaya Abi Manyu',
                'jabatan' => 'F&B CEO',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1695663707/ddn/img/teams/hnf5ivy4mw7y2jfvql1e.jpg',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Gilang Dwi Permana',
                'jabatan' => 'Barista',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1695663706/ddn/img/teams/svqequbpsr0jqryont3j.jpg',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Dzukhan Anggi P, S.T',
                'jabatan' => 'CEO',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1695663709/ddn/img/teams/pserpuawracvmam4kgxz.png',
                'text' => 'bla bla'
            ],
            [
                'name' => 'Rico M, S.Ds',
                'jabatan' => 'Furniture Designer',
                'imgurl' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609783/ddn/img/teams/hgrgqv2bye6xqggaty0x.png',
                'text' => 'bla bla'
            ],
            ];

        // $images = [
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606456/ddn/img/team/id-ghazy.png",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606455/ddn/img/team/id-inggi.jpg",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606456/ddn/img/team/id-fatur.jpg",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606457/ddn/img/team/id-sadida.jpg",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606457/ddn/img/team/id-zalfa.jpg",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606456/ddn/img/team/id-dinda.jpg",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606455/ddn/img/team/id-bimo.jpg",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606455/ddn/img/team/id-anggi.jpg",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606454/ddn/img/team/id-dandi.jpg",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606457/ddn/img/team/id-rivan.jpg",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606457/ddn/img/team/id-tazkia.jpg",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606456/ddn/img/team/id-rico.jpg",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606969/ddn/img/team/id-nur.jpg",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606968/ddn/img/team/id-imam.jpg",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606967/ddn/img/team/id-fikri.jpg",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606966/ddn/img/team/id-faradilah.jpg",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606966/ddn/img/team/id-toya.jpg",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606966/ddn/img/team/id-cindy.jpg",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606965/ddn/img/team/id-gilang.jpg",
        //     "https://res.cloudinary.com/djzee3t99/image/upload/v1708606965/ddn/img/team/id-rifqi.png"

        // ];

        foreach ($members as $team) {
            Team::create($team);
        }
    }
}