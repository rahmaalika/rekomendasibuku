<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Monolog\Level;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'alika',
            'email' => 'alykarahma@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'a',
            'email' => 'a@gmail.com',
            'password' => bcrypt('123')
        ]);
    }
}
