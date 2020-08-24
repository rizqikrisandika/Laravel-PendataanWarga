<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Warga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat_ktp');
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten_kota');  
            $table->string('provinsi');                
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('status_nikah');
            $table->string('status_tinggal');
            $table->string('blok');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
