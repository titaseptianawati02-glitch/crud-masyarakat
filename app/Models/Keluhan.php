<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;

    protected $fillable = [
        'keluhan',
        'status',
        'masyarakat_id'
    ];

    public function pelapor()
    {
        return $this->belongsTo(Masyarakat::class, 'masyarakat_id');
    }
}