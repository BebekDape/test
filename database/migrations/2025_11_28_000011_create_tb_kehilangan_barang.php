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
        Schema::create('tb_kehilanganBarang', function (Blueprint $table) {
            $table->id('id_kehilangan');
            $table->foreignId('id_barang')->constrained('tb_barang', 'id_barang')->onDelete('cascade');
            $table->foreignId('id_siswa')->constrained('tb_siswa', 'id_siswa')->onDelete('cascade');
            $table->date('tanggal_kehilangan');
            $table->text('deskripsi');
            $table->enum('status', ['dilaporkan', 'sedang_ditangani', 'ditemukan', 'dihapus']);
            $table->string('bukti')->nullable();
            $table->foreignId('alat_id')->nullable()->constrained('tb_peminjaman_alat', 'alat_id')->onDelete('set null');
            $table->foreignId('id_staff')->constrained('tb_staff', 'id_staff')->onDelete('cascade');
            $table->timestamp('resolved_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kehilangan');
    }
};
