<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\RayonSeeder;
use Database\Seeders\RombelSeeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RayonSeeder::class, 
            RombelSeeder::class,
        ]);
        $users = [
            [
                'nis' => 1200090,
                'name' => 'admin',
                'role' => 'admin',
                'password' => Hash::make('123'),
            ],
            [
                'nis' => 1200091,
                'name' => 'student',
                'role' => 'student',
                'password' => Hash::make('123'),
            ],
        ];
        User::insert($users);
        // \App\Models\User::factory(10)->create();
    }
}
