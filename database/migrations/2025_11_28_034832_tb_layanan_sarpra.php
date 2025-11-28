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
        Schema::create('tb_layananSarpra', function (Blueprint $table) {
            $table->id('id_layanan');
            $table->foreignId('id_siswa')->constrained('tb_siswa', 'id_siswa')->onDelete('cascade');
            $table->enum('jenis_layanan', ['layanan1', 'layanan2']); // Sesuaikan enum value
            $table->text('keluhan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_layananSarpra');
    }
};
