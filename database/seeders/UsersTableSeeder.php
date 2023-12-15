<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'user1',
            'email' => 'user1@example.com',
            'password' => Hash::make('user123'),
        ]);

        User::factory()->create([
            'name' => 'user2',
            'email' => 'user2@example.com',
            'password' => Hash::make('user123'),
        ]);

    }
}
