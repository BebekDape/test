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
        Schema::create('tb_peminjaman_alat', function (Blueprint $table) {
            $table->id('alat_id');
            $table->foreignId('id_siswa')->constrained('tb_siswa', 'id_siswa')->onDelete('cascade');
            $table->date('tanggal_peminjaman');
            $table->foreignId('id_staff')->constrained('tb_staff', 'id_staff')->onDelete('cascade');
            $table->integer('lama_peminjaman');
            $table->string('foto_barang')->nullable();
            $table->foreignId('id_barang')->constrained('tb_barang', 'id_barang')->onDelete('cascade');
            $table->date('tgl_pengembalian');
            $table->time('waktu_awal');
            $table->time('waktu_akhir');
            $table->integer('stok_dipinjam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_peminjaman_alat');
    }
};
