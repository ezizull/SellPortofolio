<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class TransaksiSeeder extends Seeder
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
    		\DB::table('transaksi')->insert([
    			'seller_id' => $faker->randomDigit,
                'user_id' => $faker->randomDigit,
                'nama jasa'=>'Editing',
                'tanggal pembelian' => date('Y-m-d H:i:s'),
                'deadline' => $faker->dateTime,
                'deskripsi' => $faker->sentence,
                'status' => 'Belum',
                'portofolio_id' => $faker->randomDigit,
                'fee_admin' => $faker->randomNumber,
                'harga' => $faker->randomNumber,
                'updated_at'=>date('Y-m-d H:i:s')
    		]);
 
    	}
    }
}
