<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HistoryLog extends Model
{
    protected $table = 'tb_history_logs';
    protected $primaryKey = 'id_history';
    
    protected $fillable = [
        'id_siswa',
        'tipe',
        'status',
        'id_staff',
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
}