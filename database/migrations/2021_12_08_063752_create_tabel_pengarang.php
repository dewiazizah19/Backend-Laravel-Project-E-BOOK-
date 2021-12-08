<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelPengarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_pengarang', function (Blueprint $table) {
            $table->string('nama_pengarang' ,100);
            $table->string('profil_pengarang' ,1000);
            $table->string('email_pengarang' ,255);
            $table->string('web_pengarang' ,100);
            $table->primary('nama_pengarang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_pengarang');
    }
}
