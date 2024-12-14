<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PesanSaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'pesan', // Tambahkan kolom 'pesan'
    ];

    // Relasi Many-to-One dengan model User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
