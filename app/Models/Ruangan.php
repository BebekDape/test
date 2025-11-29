<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ruangan extends Model
{
    protected $table = 'tb_ruangan';
    protected $primaryKey = 'ruangan_id';
    
    protected $fillable = [
        'nama_ruangan',
        'status',
        'fasilitas',
    ];

    // Relasi ke Peminjaman Ruangan
    public function peminjamanRuangan(): HasMany
    {
        return $this->hasMany(PeminjamanRuangan::class, 'ruangan_id', 'ruangan_id');
    }
}