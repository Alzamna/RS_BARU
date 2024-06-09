<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    use HasFactory;
    protected $table = "rekam_medis";
    protected $primaryKey = 'NIK';
    protected $fillable = [
    'Nama_Pasien', 'NIK', 'Nama_Dokter', 'Ruang_Pemeriksaan','Hasil_Pemeriksaan','Saran','Tanggal_Periksa'
    ];
}
