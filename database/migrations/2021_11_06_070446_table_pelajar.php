<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePelajar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelajars', function (Blueprint $table) {
            $table->string('Id' ,45);
            $table->string('Nama' ,150);
            $table->date('Tanggal Lahir');
            $table->string('Alamat' ,255);
            $table->integer('Phone');
            $table->primary('Id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelajars');
    }
}
