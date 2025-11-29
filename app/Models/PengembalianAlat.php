<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PengembalianAlat extends Model
{
    protected $table = 'tb_pengembalianAlat';
    protected $primaryKey = 'kembalialat_id';
    
    protected $fillable = [
        'alat_id',
        'foto',
    ];

    // Relasi ke Peminjaman Alat
    public function peminjamanAlat(): BelongsTo
    {
        return $this->belongsTo(PeminjamanAlat::class, 'alat_id', 'alat_id');
    }
}
