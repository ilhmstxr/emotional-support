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
        $users = [
            [
                'name' => 'admin',
                'email' => 'susantoo@gmail.com',
                'role_id' => '1',
                'password' => 'susugede'
            ],
            [
                'name' => 'konsultan1',
                'email' => 'shitty@gmail.com',
                'role_id' => '2',
                'password' => 'shittyA$$'
            ],
            [
                'name' => 'gangguanjawa',
                'email' => 'jawa@gmail.com',
                'role_id' => '3',
                'password' => 'kulonuwun'
            ],
        ];
        User::insert($users);
    }
}
