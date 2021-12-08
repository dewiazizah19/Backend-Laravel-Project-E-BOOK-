<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelLibrary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_library', function (Blueprint $table) {
            $table->string('username' ,50);
            $table->integer('id_library');
            $table->integer('id_buku');
            $table->integer('id_genre');
            $table->primary('username');
            $table->foreign('id_buku')->references('id_buku')->on('tabel_buku');
            $table->foreign('id_genre')->references('id_genre')->on('tabel_genre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_library');
    }
}
