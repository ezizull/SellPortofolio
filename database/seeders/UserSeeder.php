<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=1; $i <= 5  ; $i++) {
            if($i == 1){
                User::create([
                    'name' => 'admin',
                    'email' => 'admin@email.com',
                    'password' => bcrypt('12345678'),
                    'penjual' => '1',
                    'pengguna' => '1',
                ]);

                DB::table('penjual')->insert([
                    'first name' => 'admin',
                    'email' => 'admin@email.com',
                    'password' => bcrypt('12345678'),
                    'no hp' => $faker->phoneNumber,
                    'alamat' => $faker->address,
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                ]);

                DB::table('pengguna')->insert([
                    'username' => 'admin',
                    'email' => 'admin@email.com',
                    'password' => bcrypt('12345678'),
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                ]);
            } else {
                User::create([
                    'name' => "user$i",
                    'email' => "user$i@email.com",
                    'password' => bcrypt('user1234'),
                    'penjual' => '1',
                    'pengguna' => '1',
                ]);

                DB::table('penjual')->insert([
                    'first name' => "user$i",
                    'middle name' => $faker->boolean() ? "" : $faker->firstName(),
                    'last name' => $faker->boolean() ? "" :  $faker->lastName(),
                    'email' => "user$i@email.com",
                    'password' => bcrypt('user1234'),
                    'no hp' => $faker->phoneNumber,
                    'alamat' => $faker->address,
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                ]);

                DB::table('pengguna')->insert([
                    'username' => "user$i",
                    'email' => "user$i@email.com",
                    'password' => bcrypt('user1234'),
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                ]);
            }
        }
    }
}
