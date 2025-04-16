<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "Jaime Pérez Peñaloza";
        $user->email = "jaime.perez.penaloza@gmail.com";
        $user->password = bcrypt("12345678");
        $user->avatar = 'default.png';
        $user->save();

        User::factory(10)->create();
    }
}
