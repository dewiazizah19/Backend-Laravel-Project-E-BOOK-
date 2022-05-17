<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_transaksi', function (Blueprint $table) {
            $table->integer('idtransaksi');
            $table->integer('id_buku');
            $table->string('judul' ,100);
            $table->integer('harga');
            $table->integer('total');
            $table->timestamps('waktu_transaksi');
            $table->primary('id_transaksi');
            $table->foreign('id_buku')->references('id_buku')->on('tabel_buku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_transaksi');
    }
}
