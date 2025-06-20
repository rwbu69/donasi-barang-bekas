<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call the UserSeeder to create test accounts
        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
            DonaturSeeder::class,
            OrganizationSeeder::class,
            DonationSeeder::class,
        ]);
    }
}
