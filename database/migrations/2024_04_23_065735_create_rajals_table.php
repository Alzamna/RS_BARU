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
        Schema::create('rajals', function (Blueprint $table) {
            $table->bigInteger('NIK')->length(16)->primary();
            $table->string('Nama_Pasien',100);
            $table->enum('Jenis_Kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('Alamat',100);
            $table->string('Keluhan',100);
            $table->string('Nama_Dokter',100);
            $table->enum('Ruang_Pemeriksaan', ['Poliklinik', 'Poli Anak', 'Poli Mata', 'Poli Gigi','Poli THT', 'Poli Saraf', 'Poli Bedah', 'Poli Dalam']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rajals');
    }
};
