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

        User::create([
            "name"=> "Administrador",
            "email"=> "admin@example.com",
            "cpf"=> "111.111.111-11",
            "role_id" => $adminRole->id,
            "status" => "active",	
            "password"=> Hash::make("123"),
        ]);

         
         /* $this->call(RoleSeeder::class); 
          $this->call([ResearchSeeder::class]);  */
    }
}
