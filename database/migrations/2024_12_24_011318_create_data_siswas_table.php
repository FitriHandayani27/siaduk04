<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id(); //Kolom id otomatis
            $table->string('nama'); //Nama Siswa
            $table->string('nisn'); //NISN
            $table->string('kelas'); //Kelas Siswa
            $table->string('tanggal_lahir'); //Tanggal Lahir
            $table->string('jenis_kelamin'); //Jenis Kelamin
            $table->string('alamat'); //Alamat Rumah
            $table->string('telepon'); //Nomor Telepon
            $table->timestamps(); //Kolome created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_siswas');
    }
};
