<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_perusahaan');
            $table->string('logo_perusahaan');
            $table->string('alamat_perusahaan');
            $table->string('deskripsi_perusahaan');
            $table->string('detail_perusahaan');
            $table->string('galery1');
            $table->string('galery2');
            $table->string('galery3');
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
        Schema::dropIfExists('lowongan');
    }
}
