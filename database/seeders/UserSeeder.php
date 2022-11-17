<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@localhost',
            'password' => bcrypt('password'),
            'status' => 'admin',
        ]);
        User::create([
            'name' => 'Member',
            'email' => 'member@localhost',
            'password' => bcrypt('password'),
            'status' => 'member',
        ]);
    }
}
