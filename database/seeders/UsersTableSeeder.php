<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDomicilio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Creamos 100 usuarios
       $users = User::factory()->count(100)->create();

       // Para cada usuario, creamos un domicilio
       foreach ($users as $user) {
           UserDomicilio::factory()->create(['user_id' => $user->id]);
       }
    }
}
