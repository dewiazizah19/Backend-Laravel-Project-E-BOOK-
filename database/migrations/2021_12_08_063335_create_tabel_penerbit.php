<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelPenerbit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_penerbit', function (Blueprint $table) {
            $table->string('nama_penerbit' ,100);
            $table->string('profil_penerbit' ,1000);
            $table->string('email_penerbit' ,255);
            $table->string('web_penerbit' ,100);
            $table->primary('nama_penerbit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_penerbit');
    }
}
