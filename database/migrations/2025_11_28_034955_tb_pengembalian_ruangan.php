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
        Schema::create('tb_pengembalian_ruangan', function (Blueprint $table) {
            $table->id('kembaliruang_id');
            $table->foreignId('peminjaman_id')->constrained('tb_peminjaman_ruangan', 'peminjaman_id')->onDelete('cascade');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengembalian_ruangan');
    }
};
