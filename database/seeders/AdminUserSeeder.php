<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Cek apakah user admin sudah ada
        if (!User::where('email', 'ipul@gmail.com')->exists()) {
            User::create([
                'name' => 'ipul',
                'email' => 'ipul@gmail.com',
                'password' => Hash::make('ipulipul'),
            ]);
            $this->command->info('Admin user created successfully!');
        } else {
            $this->command->warn('Admin user already exists!');
        }
    }
}
