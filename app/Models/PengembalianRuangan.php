<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PengembalianRuangan extends Model
{
    protected $table = 'tb_pengembalian_ruangan';
    protected $primaryKey = 'kembaliruang_id';
    
    protected $fillable = [
        'peminjaman_id',
        'foto',
    ];

    // Relasi ke Peminjaman Ruangan
    public function peminjamanRuangan(): BelongsTo
    {
        return $this->belongsTo(PeminjamanRuangan::class, 'peminjaman_id', 'peminjaman_id');
    }
}