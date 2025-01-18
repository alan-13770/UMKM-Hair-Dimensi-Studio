<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class heroSection extends Model
{
    use HasFactory;

    protected $table = 'herosection';

    public $timestamps = false;

    protected $fillable = [
        'judul',
        'penjelasan',
        'gambar',
    ];
}
