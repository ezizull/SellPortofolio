<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $judul = [
            "Editing Photo", "Motion Graphic", "Video Graphic", "Motion Graphic", "3D Animation", "2D Animation"
        ];

        for($i = 1; $i <= 5; $i++){
            $my_number = $faker->numberBetween(1,5);
            $else_number = $faker->numberBetween(2,5);
            $status = $faker->boolean()? "selesai" : "belum";

            // insert data ke table pegawai menggunakan Faker
            if($i <= 3){

                DB::table('transaksi')->insert([
                    'seller_id' => $my_number,
                    'user_id' => $else_number,
                    'nama jasa'=>"$judul[$i]",
                    'tanggal pembelian' => date('Y-m-d H:i:s'),
                    'deadline' => $faker->dateTime,
                    'deskripsi' => $faker->paragraphs(4, true),
                    'status' => "$status",
                    'portofolio_id' => $faker->numberBetween(1,5),
                    'fee_admin' => '10000',
                    'harga' => '500000',
                    'updated_at'=>date('Y-m-d H:i:s')
                ]);

                DB::table('portofolio')->insert([
                    'title' => "$judul[$i]",
                    'user_id' => $my_number,
                    'deskripsi' => $faker->paragraphs(4, true),
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                ]);

                DB::table('history_seller')->insert([
                    'nama jasa' => "$judul[$i]",
                    'seller_id' => $my_number,
                    'tanggal pembelian'=>date('Y-m-d H:i:s'),
                    'harga' => '500000',
                    'updated_at'=>date('Y-m-d H:i:s')
                ]);

                DB::table('history_user')->insert([
                    'user_id' => $else_number,
                    'nama jasa' => "$judul[$i]",
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                ]);
            }

            if($i > 3){
                DB::table('portofolio')->insert([
                    'title' => "$judul[$i]",
                    'user_id' => $else_number,
                    'deskripsi' => $faker->paragraphs(4, true),
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                ]);

                DB::table('transaksi')->insert([
                    'seller_id' => $else_number,
                    'user_id' => $my_number,
                    'nama jasa'=>"$judul[$i]",
                    'tanggal pembelian' => date('Y-m-d H:i:s'),
                    'deadline' => $faker->dateTime,
                    'deskripsi' => $faker->paragraphs(4, true),
                    'status' => "$status",
                    'portofolio_id' => $faker->numberBetween(1,5),
                    'fee_admin' => '10000',
                    'harga' => '500000',
                    'updated_at'=>date('Y-m-d H:i:s')
                ]);

                DB::table('history_seller')->insert([
                    'nama jasa' => "$judul[$i]",
                    'seller_id' => $else_number,
                    'tanggal pembelian'=>date('Y-m-d H:i:s'),
                    'harga' => '500000',
                    'updated_at'=>date('Y-m-d H:i:s')
                ]);

                DB::table('history_user')->insert([
                    'user_id' => $else_number,
                    'nama jasa' => "$judul[$i]",
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                ]);

            }

        }
    }
}
