<?php

namespace Database\Seeders;

use App\Models\consultantInfo;
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

        $admin = [
            [
                'name' => 'admin',
                'email' => 'susantoo@gmail.com',
                'role_id' => '1',
                'password' => Bcrypt('susugede')
            ],
        ];

        $psikolog = [
            [
                'name' => 'Kim Bab',
                'email' => 'kimBau@gmail.com',
                'role_id' => '2',
                'password' => Bcrypt('shittyA$$')
            ],
            [
                'name' => 'Ram Yeon',
                'email' => 'tabrakyeon@gmail.com',
                'role_id' => '2',
                'password' => Bcrypt('shittyA$$')
            ],
            [
                'name' => 'Bul Dak',
                'email' => 'bulgembul@gmail.com',
                'role_id' => '2',
                'password' => Bcrypt('shittyA$$')
            ],
        ];
        $psikolog_info = [
            [
                'consultant_id' => 3,
                'price' => 888000,
                'degree' => 'M. Psi, Psikolog',
                'expert_in' => 'Psikologi Klinis',
                'sessions' => 110,
                'helped' => 93,
            ],
            [
                'consultant_id' => 4,
                'price' => 999000,
                'degree' => 'M. Psi, Psikolog',
                'expert_in' => 'Psikologi Komunitas',
                'sessions' => 220,
                'helped' => 178,
            ],
            [
                'consultant_id' => 5,
                'price' => 777000,
                'degree' => 'M. Psi, Psikolog',
                'expert_in' => 'Psikologi Mental',
                'sessions' => 40,
                'helped' => 36,
            ],
        ];

        $user = [
            'name' => 'gangguanjawa',
            'email' => 'jawa@gmail.com',
            'role_id' => '3',
            'password' => Bcrypt('kulonuwun')
        ];
        User::insert($user);
        User::insert($admin);
        User::insert($psikolog);
        consultantInfo::insert($psikolog_info);
    }
}
