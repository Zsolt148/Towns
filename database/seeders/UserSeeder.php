<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'name' => 'Admin',
            'role' => User::ROLE_ADMIN,
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin')
        ]);

        User::firstOrCreate([
            'name' => 'User',
            'role' => User::ROLE_USER,
            'email' => 'user@user.com',
            'email_verified_at' => now(),
            'password' => Hash::make('user')
        ]);
    }
}
