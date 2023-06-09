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
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_ujian');
            $table->string('nama_peserta');
            $table->string('jumlah_benar')->nullable();
            $table->string('jumlah_salah')->nullable();
            $table->string('nilai')->nullable();
            $table->text('jawaban')->nullable(); // Menambahkan field jawaban dengan tipe data TEXT
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaians');
    }
};
