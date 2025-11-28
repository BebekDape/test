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
        Schema::create('tb_barang', function (Blueprint $table) {
            $table->id('id_barang');
            $table->string('nama', 100);
            $table->enum('status_peminjaman', ['tersedia', 'maintenance', 'dipinjam']);
            $table->text('detail_barang');
            $table->integer('stok');
            $table->string('kode_barang', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_barang');
    }
};
