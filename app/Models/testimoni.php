<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimoni extends Model
{
    use HasFactory;

    protected $table = 'testimoni';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'pesansaran',
        'gambar',
    ];
}