<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->integer('seller_id');
            $table->integer('user_id');
            $table->string('nama jasa', 100);
            $table->date('tanggal pembelian');
            $table->date('deadline');
            $table->string('deskripsi', 100);
            $table->string('status', 100);
            $table->integer('harga');
            $table->integer('portofolio_id');
            $table->integer('fee_admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
