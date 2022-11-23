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
            'photo' => 'hoshi.jpg',
        ]);
        Writer::factory(33)->create([
            'photo' => 'jisoo.jpg',
        ]);
        Writer::factory(34)->create([
            'photo' => 'bright.jpg',
        ]);
    }
}
