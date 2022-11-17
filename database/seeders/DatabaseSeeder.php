<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Member;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Member::factory(100)->create();
        $this->call([
            WriterSeeder::class,
            BookSeeder::class,
            // MemberSeeder::class
        ]);
    }
}
