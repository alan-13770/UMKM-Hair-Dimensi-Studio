<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class aboutus extends Model
{
    use HasFactory;

    protected $table = 'aboutus';

    public $timestamps = false;

    protected $fillable = [

        'penjelasan',

    ];
}
