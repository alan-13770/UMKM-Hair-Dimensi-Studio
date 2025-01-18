<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class galeriPangkas extends Model
{
    use HasFactory;

    protected $table = 'galeripangkas';

    public $timestamps = false;

    protected $fillable = [
        'jenis_pangkas',
        'penjelasan',
        'gambar',
    ];
}
