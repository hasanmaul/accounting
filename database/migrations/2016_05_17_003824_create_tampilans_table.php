<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTampilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tampilans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('nama_nasabah');
            $table->string('jenis_kelamin');
            $table->string('tanggal_pengeluaran');
            $table->string('no_rek');
            $table->enum('jenis_rek', ['BCA','Mandiri','BRI']);
            $table->integer('jml_setoran');
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
        Schema::drop('tampilans');
    }
}
