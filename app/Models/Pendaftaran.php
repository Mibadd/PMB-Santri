<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pendaftaran extends Model
{
    use HasFactory;

    /**
     * Mass Assignment
     * Mengizinkan semua field untuk diisi secara massal kecuali 'id'.
     * Ini memudahkan saat menyimpan data dari form.
     */
    protected $guarded = ['id'];

    /**
     * Mendefinisikan relasi "belongsTo" ke model User.
     * Artinya, setiap data Pendaftaran pasti dimiliki oleh satu User.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}