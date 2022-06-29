<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HistorySellerSeeder extends Seeder
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
 
    	      // insert data ke table pegawai menggunakan Faker
    		\DB::table('history_seller')->insert([
    			'nama jasa' => 'Editing',
                'seller_id' => $faker->randomDigit,
                'tanggal pembelian'=>date('Y-m-d H:i:s'),
                'harga' => $faker->randomNumber,
                'updated_at'=>date('Y-m-d H:i:s')
    		]);
 
    	}
    }
}
