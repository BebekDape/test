<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PeminjamanAlat extends Model
{
    protected $table = 'tb_peminjaman_alat';
    protected $primaryKey = 'alat_id';
    
    protected $fillable = [
        'id_siswa',
        'tanggal_peminjaman',
        'id_staff',
        'lama_peminjaman',
        'foto_barang',
        'id_barang',
        'tgl_pengembalian',
        'waktu_awal',
        'waktu_akhir',
        'stok_dipinjam',
    ];

    protected $casts = [
        'tanggal_peminjaman' => 'date',
        'tgl_pengembalian' => 'date',
        'lama_peminjaman' => 'integer',
        'stok_dipinjam' => 'integer',
    ];

    // Relasi ke Siswa
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id_siswa');
    }

    // Relasi ke Staff
    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class, 'id_staff', 'id_staff');
    }

    // Relasi ke Barang
    public function barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }

    // Relasi ke Pengembalian Alat
    public function pengembalianAlat(): HasOne
    {
        return $this->hasOne(PengembalianAlat::class, 'alat_id', 'alat_id');
    }

    // Relasi ke Kehilangan Barang
    public function kehilanganBarang(): HasOne
    {
        return $this->hasOne(KehilanganBarang::class, 'alat_id', 'alat_id');
    }
}
