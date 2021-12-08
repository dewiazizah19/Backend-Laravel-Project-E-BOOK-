<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelDetailtransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_detailtransaksi', function (Blueprint $table) {
            $table->integer('no_transaksi');
            $table->date('waktu_transaksi');
            $table->string('email' ,255);
            $table->string('username' ,50);
            $table->integer('sub_total');
            $table->string('pembayaran' ,50);
            $table->integer('dibayarkan');
            $table->primary('no_transaksi');
            $table->foreign('email')->references('email')->on('tabel_login');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_detailtransaksi');
    }
}
