<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run()
{
    // Criação do Admin
    if (!User::where('email', 'admin@example.com')->exists()) {
        $admin = User::create([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        $admin->assignRole('admin');
    }

    // Criação do Usuário Comum
    if (!User::where('email', 'user@example.com')->exists()) {
        $user = User::create([
            'name' => 'Usuário Comum',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        $user->assignRole('user');
    }
}
}

