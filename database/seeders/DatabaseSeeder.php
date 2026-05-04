<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
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