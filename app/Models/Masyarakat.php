<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{

    protected $fillable = [
        'nama',
        'nomor_kk',
        'nomor_ktp',
        'jenis_kelamin',
        'alamat'
    ];
}