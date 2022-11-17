<?php

namespace Database\Seeders;

use App\Models\Writer;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakerID=Factory::create('id_ID');
        $fakerFR=Factory::create('fr_FR');
        $fakerUS=Factory::create('en_US');

        $index = 0;

        foreach(Writer::all() as $writer){
            // if($index == 0){
            //     Book::factory()->create([
            //         'title'=>$fakerID->text,
            //         'synopsis'=>'Synopsis Buku Penulis 1',
            //         'writer_id'=>$writer,
            //     ]);
            // }
            // elseif($index == 1){
            //     Book::factory()->create([
            //         'title'=>$fakerFR->text,
            //         'synopsis'=>'Synopsis Buku Penulis 2',
            //         'writer_id'=>$writer,
            //     ]);
            // }
            // elseif($index == 2){
                Book::factory()->create([
                    'title'=>$fakerUS->text,
                    'synopsis'=>'Synopsis Buku Penulis '.$index+1,
                    'writer_id'=>$writer,
                ]);
            // }
            $index++;
        }
    }
}
