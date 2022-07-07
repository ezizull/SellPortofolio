<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
    	for($i = 1; $i <= 3; $i++){

    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('transaksi')->insert([
    			'seller_id' => $faker->numberBetween(1,5),
                'user_id' => $faker->numberBetween(2,5),
                'nama jasa'=>'Editing',
                'tanggal pembelian' => date('Y-m-d H:i:s'),
                'deadline' => $faker->dateTime,
                'deskripsi' => $faker->sentence,
                'status' => 'Belum',
                'portofolio_id' => $faker->numberBetween(1,5),
                'fee_admin' => '10000',
                'harga' => '500000',
                'updated_at'=>date('Y-m-d H:i:s')
    		]);

    	}

    	for($i = 1; $i <= 2; $i++){

    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('transaksi')->insert([
    			'seller_id' => $faker->numberBetween(2,5),
                'user_id' => $faker->numberBetween(1,5),
                'nama jasa'=>'Editing',
                'tanggal pembelian' => date('Y-m-d H:i:s'),
                'deadline' => $faker->dateTime,
                'deskripsi' => $faker->sentence,
                'status' => 'Belum',
                'portofolio_id' => $faker->numberBetween(1,5),
                'fee_admin' => '10000',
                'harga' => '500000',
                'updated_at'=>date('Y-m-d H:i:s')
    		]);

    	}
    }
}
