<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rumahsakit_id');
            $table->string('nama_lengkap');
            $table->string('spesialsi');
            $table->string('jenis_kelamin');
            $table->string('title_akademis');
            $table->string('jadwal_konsultasi');
            $table->string('lama_pengalaman');
            $table->string('alamat_email');
            $table->string('kelas_kamar');
            $table->string('nama_kamar');
            $table->string('keterangan_kamar');
            $table->integer('price');
            $table->string('foto');
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
        Schema::dropIfExists('kamar');
    }
}
