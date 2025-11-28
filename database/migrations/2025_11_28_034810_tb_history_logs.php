<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_history_logs', function (Blueprint $table) {
            $table->id('id_history');
            $table->foreignId('id_siswa')->constrained('tb_siswa', 'id_siswa')->onDelete('cascade');
            $table->enum('tipe', ['alat', 'ruangan']);
            $table->enum('status', ['pending', 'approved', 'rejected', 'returned']);
            $table->foreignId('id_staff')->constrained('tb_staff', 'id_staff')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_history_logs');
    }
};
