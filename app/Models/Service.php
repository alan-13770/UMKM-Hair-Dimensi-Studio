<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $table = 'service';

    public $timestamps = false;

    protected $fillable = [
        'jenis_service',
        'harga',
        'detail',
    ];
}
