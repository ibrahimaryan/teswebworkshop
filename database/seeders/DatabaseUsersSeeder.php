<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'nama'=>'Super Admin',
                'email'=>'workshopchan3e@gmail.com',
                'role'=>'Spadmin',
                'password'=>bcrypt('woksopedieciella3e')
            ],
            [
                'nama'=>'Admin',
                'email'=>'alladmin@gmail.com',
                'role'=>'Admin',
                'password'=>bcrypt('siapaajajadiadmin')
            ],
        ];

        foreach ($userData as $key => $val){
            User::create($val);
        }
    }
}
