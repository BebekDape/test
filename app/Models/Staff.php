<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Staff extends Model
{
    protected $table = 'tb_staff';
    protected $primaryKey = 'id_staff';
    
    protected $fillable = [
        'username',
        'nama',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    // Relasi ke Peminjaman Alat
    public function peminjamanAlat(): HasMany
    {
        return $this->hasMany(PeminjamanAlat::class, 'id_staff', 'id_staff');
    }

    // Relasi ke Peminjaman Ruangan
    public function peminjamanRuangan(): HasMany
    {
        return $this->hasMany(PeminjamanRuangan::class, 'id_staff', 'id_staff');
    }

    // Relasi ke History Logs
    public function historyLogs(): HasMany
    {
        return $this->hasMany(HistoryLog::class, 'id_staff', 'id_staff');
    }

    // Relasi ke Kehilangan Barang
    public function kehilanganBarang(): HasMany
    {
        return $this->hasMany(KehilanganBarang::class, 'id_staff', 'id_staff');
    }
}
