<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@dianaglass.com'],
            [
                'name'     => 'Admin',
                'email'    => 'admin@sannoglass.com',
                'password' => Hash::make('Admin1234$'),
            ]
        );
    }
}