<?php

namespace Database\Seeders;

use App\Models\Award;
use Illuminate\Database\Seeder;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Award::factory()
        //     ->count(5)
        //     ->create();

        $awards = [
            [
                'name' => 'First Virtual Architecture Exhibitions.',
                'tanggal' => 'Februari 2021',
                'lokasi' => 'Cirebon',
            ],
            [
                'name' => 'First Virtual Batik Exhibitions.',
                'tanggal' => 'Maret 2022',
                'lokasi' => 'Sumedang',
            ],
            [
                'name' => 'Woman Independent days Virtual Exhibitions.',
                'tanggal' => 'Maret 2023',
                'lokasi' => 'Bandung',
            ],
            [
                'name' => 'Seminar Interior in Islam.',
                'tanggal' => 'September 2023',
                'lokasi' => 'Bandung',
            ],
            [
                'name' => '4th Dananjaya Design Exhibitions.',
                'tanggal' => 'Oktober 2023',
                'lokasi' => 'Bandung',
            ],
            [
                'name' => 'Attend 4th Bandung Connecty City.',
                'tanggal' => '2023',
                'lokasi' => 'Bandung',
            ],
            [
                'name' => 'Attend Dekolonialisasi Tinggalan Budaya.',
                'tanggal' => 'September 2023',
                'lokasi' => 'Bandung',
            ],
            [
                'name' => 'Holaqoh Hujroh Online with Ikmas Bandung.',
                'tanggal' => 'September 2023',
                'lokasi' => 'Bandung',
            ],
        ];

        foreach ($awards as $award) {
            Award::create($award);
        }

    }
}
