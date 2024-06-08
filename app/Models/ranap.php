<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ranap extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nama_Pasien',
        'NIK',
        'Jenis_Kelamin',
        'Alamat',
        'Keluhan',
        'Kamar',
        'Edit',
    ];
}
