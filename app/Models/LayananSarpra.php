<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LayananSarpra extends Model
{
    protected $table = 'tb_layananSarpra';
    protected $primaryKey = 'id_layanan';
    
    protected $fillable = [
        'id_siswa',
        'jenis_layanan',
        'keluhan',
    ];

    // Relasi ke Siswa
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id_siswa');
    }
}