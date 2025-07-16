<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pendaftaran extends Model
{
    // Cukup satu 'use HasFactory'
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Mendapatkan data user yang memiliki pendaftaran ini.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}