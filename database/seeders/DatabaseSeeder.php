<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\consultantInfo;
use App\Models\User;
use Database\Factories\ConsultantInfoModelFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
        ]);
        // User::factory(10)->create();
        // consultantInfo::factory(10)->create();
        // consultantInfo::factory()->make([

        // ]);
        // ConsultantInfoModelFactory::factory(10)->create();
        
        // UserModelFactory::factory()->count(10)->make();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
