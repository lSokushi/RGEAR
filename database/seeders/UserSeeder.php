<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => '123',
            'cpf' => '12345678901', // Adicione um CPF válido ou fictício
            'role_id' => 1, // Substitua 1 pelo ID de uma role existente
            'status' => 'active', // Adicione o status adequado (ex.: 'active')

        ]);
    }
}
