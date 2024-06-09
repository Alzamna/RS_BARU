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
        Schema::create('dokters', function (Blueprint $table) {
            $table->string('Nama_Dokter', 70);
            $table->bigInteger('NIK_Dokter')->length(16)->primary();
            $table->enum('Spesialisasi', ['Dokter Umum', 'Spesialis Anak', 'Spesialis Mata', 'Spesialis Gigi', 'Spesialis Tulang', 'Spesialis Bedah', 'Spesialis Saraf', 'Spesialis Jantung', 'Spesialis Penyakit Dalam', 'Spesialis Kandungan']);
            $table->string('Jadwal', 100);
            $table->string('Alamat', 225);
            $table->string('No_Telp', 13);
            $table->enum('Status', ['Aktif', 'Tidak Aktif']); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokters');
    }
};
