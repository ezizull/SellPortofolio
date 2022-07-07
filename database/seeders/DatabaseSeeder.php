<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            // PortofolioSeeder::class,
            // PenjualSeeder::class,
            // PenggunaSeeder::class,
            // TransaksiSeeder::class,
            // HistorySellerSeeder::class,
            // HistoryUserSeeder::class,
        ]);

        $this->call([
            DummySeeder::class,

        ]);
    }
}
