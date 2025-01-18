<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Informasi extends Model
{
    use HasFactory;

    protected $table = 'informasi';

    public $timestamps = false;

    protected $fillable = [
        'email',
        'nomor',
        'alamat',
        'hari',
        'jam',
    ];
}