<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KehilanganBarang extends Model
{
    protected $table = 'tb_kehilanganBarang';
    protected $primaryKey = 'id_kehilangan';
    
    protected $fillable = [
        'id_barang',
        'id_siswa',
        'tanggal_kehilangan',
        'deskripsi',
        'status',
        'bukti',
        'alat_id',
        'id_staff',
        'resolved_at',
    ];

    protected $casts = [
        'tanggal_kehilangan' => 'date',
        'resolved_at' => 'datetime',
    ];

    // Relasi ke Barang
    public function barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }

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

    // Relasi ke Peminjaman Alat
    public function peminjamanAlat(): BelongsTo
    {
        return $this->belongsTo(PeminjamanAlat::class, 'alat_id', 'alat_id');
    }
}