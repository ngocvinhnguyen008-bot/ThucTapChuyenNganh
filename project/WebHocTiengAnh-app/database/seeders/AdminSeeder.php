<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user if not exists
        User::firstOrCreate(
            ['email' => 'ngocvinhnguyen008@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('12345678'),
                'phone' => '0123456789',
                'date_of_birth' => '1990-01-01',
                'email_verified_at' => now(),
            ]
        );
    }
}
