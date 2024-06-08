<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123')
            ],
            [
                'name'=>'Pendaftaran',
                'email'=>'pendaftaran@gmail.com',
                'role'=>'pendaftaran',
                'password'=>bcrypt('123')
            ],
            [
                'name'=>'Poli',
                'email'=>'poli@gmail.com',
                'role'=>'poli',
                'password'=>bcrypt('123')
            ],
        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
