<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'user' => '00100100101',
            'role' => 'admin',
            'password' => 'admin0412'
        ]);
        User::create([
            'user' => '00100100102',
            'role' => 'student',
            'password' => 'student0412'
        ]);
        User::create([
            'user' => '00100100103',
            'role' => 'secretary',
            'password' => 'secretary0412'
        ]);
        User::create([
            'user' => '00100100104',
            'role' => 'teacher',
            'password' => 'teacher0412'
        ]);
    }
}
