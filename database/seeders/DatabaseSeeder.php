<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::firstOrCreate(
            ['email' => 'abdullah@test.com'],
            [
                'name' => 'Abdullah',
                'password' => Hash::make('12345'),
            ]
        );

        $this->call([
            PartSeeder::class,
        ]);
    }
}
