<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barang extends Model
{
    protected $table = 'tb_barang';
    protected $primaryKey = 'id_barang';
    
    protected $fillable = [
        'nama',
        'status_peminjaman',
        'detail_barang',
        'stok',
        'kode_barang',
    ];

    protected $casts = [
        'stok' => 'integer',
    ];

    // Relasi ke Peminjaman Alat
    public function peminjamanAlat(): HasMany
    {
        return $this->hasMany(PeminjamanAlat::class, 'id_barang', 'id_barang');
    }

    // Relasi ke Kehilangan Barang
    public function kehilanganBarang(): HasMany
    {
        return $this->hasMany(KehilanganBarang::class, 'id_barang', 'id_barang');
    }
}