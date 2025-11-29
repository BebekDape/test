<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PeminjamanRuangan extends Model
{
    protected $table = 'tb_peminjaman_ruangan';
    protected $primaryKey = 'peminjaman_id';
    
    protected $fillable = [
        'id_siswa',
        'persetujuan',
        'keperluan',
        'lama_peminjaman',
        'tanggal_mulai',
        'tanggal_akhir',
        'waktu_awal',
        'waktu_akhir',
        'format_surat',
        'upload_surat_jalan',
        'ruangan_id',
        'id_staff',
    ];

    protected $casts = [
        'persetujuan' => 'boolean',
        'tanggal_mulai' => 'date',
        'tanggal_akhir' => 'date',
        'lama_peminjaman' => 'integer',
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

    // Relasi ke Ruangan
    public function ruangan(): BelongsTo
    {
        return $this->belongsTo(Ruangan::class, 'ruangan_id', 'ruangan_id');
    }

    // Relasi ke Pengembalian Ruangan
    public function pengembalianRuangan(): HasOne
    {
        return $this->hasOne(PengembalianRuangan::class, 'peminjaman_id', 'peminjaman_id');
    }
}   