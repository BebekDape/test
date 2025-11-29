<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Siswa extends Model
{
    protected $table = 'tb_siswa';
    protected $primaryKey = 'id_siswa';
    
    protected $fillable = [
        'username',
        'nama',
        'kelas',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    // Relasi ke Peminjaman Alat
    public function peminjamanAlat(): HasMany
    {
        return $this->hasMany(PeminjamanAlat::class, 'id_siswa', 'id_siswa');
    }

    // Relasi ke Peminjaman Ruangan
    public function peminjamanRuangan(): HasMany
    {
        return $this->hasMany(PeminjamanRuangan::class, 'id_siswa', 'id_siswa');
    }

    // Relasi ke History Logs
    public function historyLogs(): HasMany
    {
        return $this->hasMany(HistoryLog::class, 'id_siswa', 'id_siswa');
    }

    // Relasi ke Layanan Sarpra
    public function layananSarpra(): HasMany
    {
        return $this->hasMany(LayananSarpra::class, 'id_siswa', 'id_siswa');
    }

    // Relasi ke Kehilangan Barang
    public function kehilanganBarang(): HasMany
    {
        return $this->hasMany(KehilanganBarang::class, 'id_siswa', 'id_siswa');
    }
}

