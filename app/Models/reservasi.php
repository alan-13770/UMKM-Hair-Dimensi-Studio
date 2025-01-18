<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasi';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'nomorwa',
        'jam',
        'tanggal',
    ];
}
