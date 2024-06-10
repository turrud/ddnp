<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@dananjayadesign.com',
                'password' => \Hash::make('aduhGimana'),
            ]);
        // $this->call(PermissionsSeeder::class);

        // $this->call(AboutSeeder::class);
        // $this->call(AwardSeeder::class);
        // $this->call(ClientSeeder::class);
        // $this->call(ContactSeeder::class);
        // $this->call(HomeSeeder::class);
        // $this->call(MethodSeeder::class);
        // $this->call(PartnerSeeder::class);
        // $this->call(ProArchitecturSeeder::class);
        // $this->call(ProfileSeeder::class);
        // $this->call(ProjectInteriorSeeder::class);
        // $this->call(TeamSeeder::class);
        // $this->call(UserSeeder::class);
    }
}