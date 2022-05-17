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
            $table->string('judul' ,100);
            $table->string('genre' ,100);
            $table->string('pengarang' ,100);
            $table->string('penerbit' ,100);
            $table->string('cover' ,100);
            $table->integer('harga');
            $table->primary('Id_buku');
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
