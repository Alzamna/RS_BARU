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
        Schema::create('ranaps', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Pasien');
            $table->string('NIK');
            $table->string('Jenis_Kelamin');
            $table->string('Alamat');
            $table->string('Keluhan');
            $table->string('Kamar');
            $table->string('Edit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ranaps');
    }
};
