<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'id' => 1, // Força o ID a ser 1
            'name' => 'Administrador',
            'description' => 'Administrador do sistema'
        ]);
        
        Role::create([
            'id' => 2,
            'name' => 'Supervisor',
            'description' => 'Supervisor do sistema'
        ]);
        
        Role::create([
            'id' => 3,
            'name' => 'Usuário',
            'description' => 'Usuário do sistema'
        ]);
        

        

    }
}
