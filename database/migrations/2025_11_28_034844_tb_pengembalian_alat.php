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
        Schema::create('tb_pengembalianAlat', function (Blueprint $table) {
            $table->id('kembalialat_id');
            $table->foreignId('alat_id')->constrained('tb_peminjaman_alat', 'alat_id')->onDelete('cascade');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengembalianAlat');
    }
};
