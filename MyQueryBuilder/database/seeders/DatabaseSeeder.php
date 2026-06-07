<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Test User',
                'email' => 'test@example.com',
                'age' => 21,
                'city' => 'Manila',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alice Cruz',
                'email' => null,
                'age' => 24,
                'city' => 'Cebu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ben Santos',
                'email' => 'ben@example.com',
                'age' => 30,
                'city' => 'Davao',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
