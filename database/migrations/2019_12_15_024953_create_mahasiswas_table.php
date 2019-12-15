<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('niu');
            $table->integer('nif');
            $table->string('nama',200);
            $table->integer('nik')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('email')->nullable();
            $table->string('alamat')->nullable();
            $table->integer('angkatan');
            $table->string('no_rek')->nullable();
            $table->string('nama_pemilik_rek')->nullable();
            $table->string('bank');
            $table->integer('npwp')->nullable();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('mahasiswas');
    }
}
