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
        Schema::create('tb_ruangan', function (Blueprint $table) {
            $table->id('ruangan_id');
            $table->string('nama_ruangan', 255);
            $table->enum('status', ['tersedia', 'maintenance', 'dipinjam']);
            $table->text('fasilitas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_ruangan');
    }
};
