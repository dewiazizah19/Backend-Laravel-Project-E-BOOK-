<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_buku', function (Blueprint $table) {
            $table->integer('id_buku');
            $table->integer('id_genre');
            $table->string('judul' ,100);
            $table->string('nama_pengarang' ,100);
            $table->string('nama_penerbit' ,100);
            $table->integer('harga');
            $table->primary('Id_buku');
            $table->foreign('nama_pengarang')->references('nama_pengarang')->on('tabel_pengarang');
            $table->foreign('nama_penerbit')->references('nama_penerbit')->on('tabel_penerbit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_buku');
    }
}
