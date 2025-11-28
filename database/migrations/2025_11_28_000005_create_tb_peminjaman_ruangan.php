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
        Schema::create('tb_peminjaman_ruangan', function (Blueprint $table) {
            $table->id('peminjaman_id');
            $table->foreignId('id_siswa')->constrained('tb_siswa', 'id_siswa')->onDelete('cascade');
            $table->boolean('persetujuan');
            $table->text('keperluan');
            $table->integer('lama_peminjaman');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->time('waktu_awal');
            $table->time('waktu_akhir');
            $table->text('format_surat')->nullable();
            $table->text('upload_surat_jalan')->nullable();
            $table->foreignId('ruangan_id')->constrained('tb_ruangan', 'ruangan_id')->onDelete('cascade');
            $table->foreignId('id_staff')->constrained('tb_staff', 'id_staff')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_peminjaman_ruangan');
    }
};
