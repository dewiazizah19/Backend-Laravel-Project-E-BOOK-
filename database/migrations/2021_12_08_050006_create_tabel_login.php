<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelLogin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_login', function (Blueprint $table) {
            $table->string('email' ,255);
            $table->string('username' ,50);
            $table->integer('id_pengguna');
            $table->string('password' ,50);
            $table->primary('email');
            $table->timestamp('last_login');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_login');
    }
}
