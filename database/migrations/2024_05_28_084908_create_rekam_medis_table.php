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
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->bigInteger('NIK')->length(16)->primary();
            $table->string('Nama_Pasien',75);
            $table->string('Nama_Dokter',75);
            $table->enum('Ruang_Pemeriksaan', ['Poliklinik', 'Poli Anak', 'Poli Mata', 'Poli Gigi','Poli THT', 'Poli Saraf', 'Poli Bedah', 'Poli Dalam']);
            $table->string('Hasil_Pemeriksaan', 100);
            $table->enum('Saran', ['Rawat Jalan', 'Rawat Inap']); 
            $table->date('Tanggal_Periksa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekam_medis');
    }
};
