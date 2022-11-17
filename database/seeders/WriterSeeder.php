<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakerID = Factory::create('id_ID');
        $fakerFR = Factory::create('fr_FR');
        $fakerUS = Factory::create('en_US');

        Writer::factory(33)->create([
            'contact' => $fakerID->phoneNumber(),
            'photo' => 'hoshi.jpg',
        ]);
        Writer::factory(33)->create([
            'contact' => $fakerFR->phoneNumber(),
            'photo' => 'jisoo.jpg',
        ]);
        Writer::factory(34)->create([
            'contact' => $fakerUS->phoneNumber(),
            'photo' => 'bright.jpg',
        ]);
    }
}
