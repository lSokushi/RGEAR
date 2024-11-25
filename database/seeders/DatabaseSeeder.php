<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::factory(10)->create();

        $adminRole = Role::where("name", "=" ,"Administrador")->first();
        $supervisorRole = Role::where("name", "=" ,"Supervisor")->first();
        $UsuarioRole = Role::where("name", "=" ,"Supervisor")->first();

        User::create([
            "name"=> "Administrador",
            "email"=> "admin@example.com",
            "cpf"=> "111.111.111-11",
            "role_id" => $adminRole->id,
            "status" => "active",	
            "password"=> Hash::make("123"),
        ]);
        User::create([
            "name"=> "Supervisor",
            "email"=> "admin@example.com",
            "cpf"=> "111.111.111-12",
            "role_id" => $supervisorRole->id,
            "status" => "active",	
            "password"=> Hash::make("321"),
        ]);
        
        User::create([
            "name"=> "Administrador",
            "email"=> "usuario@example.com",
            "cpf"=> "111.111.111-13",
            "role_id" => $UsuarioRole->id,
            "status" => "active",	
            "password"=> Hash::make("333"),
        ]);

        /* $this->call(RoleSeeder::class); */
        /*  $this->call([ResearchSeeder::class]); */
    }
}
