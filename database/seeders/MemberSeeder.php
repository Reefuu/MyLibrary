<?php

namespace Database\Seeders;

use App\Models\Member;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakerUS=Factory::create('en_US');

        Member::factory(2)->create([
            'phone'=>$fakerUS->phoneNumber,
            'address'=>$fakerUS->address,
            'city'=>$fakerUS->city,
            'state'=>$fakerUS->state,
            'country'=>$fakerUS->country,
            'postcode'=>$fakerUS->postcode
        ]);
    }
}
