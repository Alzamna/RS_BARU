<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = "dokters";
    protected $primaryKey = 'NIK_Dokter';
    protected $fillable = [
        'Nama_Dokter',
        'NIK_Dokter', 
        'Spesialisasi', 
        'Jadwal', 
        'Alamat', 
        'No_Telp', 
        'Status',
    ];
}
