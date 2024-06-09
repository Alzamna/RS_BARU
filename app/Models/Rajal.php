<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rajal extends Model
{
    use HasFactory;
    protected $table = "rajals";
    protected $primaryKey = 'NIK';
    protected $fillable = [
         'Nama_Pasien', 'NIK', 'Jenis_Kelamin', 'Alamat', 'Keluhan','Nama_Dokter', 'Ruang_Pemeriksaan'
    ];
    
}
