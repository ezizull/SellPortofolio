<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 5; $i++){
            DB::table('books')->insert([
                'title' => $faker->title
            ]);
        }
        // $table->increments('id');
        // $table->string('title');
        // $table->string('writer');
        // $table->text('summary');
        // $table->integer('price');
        // $table->string('photo');
    }
}
