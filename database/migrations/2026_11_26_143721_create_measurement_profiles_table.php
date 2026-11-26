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
        Schema::create('measurement_profiles', function (Blueprint $table) {
            $table->id();

            // Informasi profil
            $table->string('profile_name');
            $table->string('owner');

            // Data ukuran (cm)
            $table->decimal('lingkar_dada', 5, 2)->nullable();
            $table->decimal('lingkar_pinggang', 5, 2)->nullable();
            $table->decimal('lingkar_pinggul', 5, 2)->nullable();
            $table->decimal('tinggi_pinggul', 5, 2)->nullable();
            $table->decimal('lebar_bahu', 5, 2)->nullable();
            $table->decimal('panjang_badan', 5, 2)->nullable();
            $table->decimal('panjang_muka', 5, 2)->nullable();
            $table->decimal('panjang_punggung', 5, 2)->nullable();
            $table->decimal('panjang_dress', 5, 2)->nullable();
            $table->decimal('panjang_bawahan', 5, 2)->nullable();
            $table->decimal('lingkar_pisak', 5, 2)->nullable();
            $table->decimal('lingkar_paha', 5, 2)->nullable();
            $table->decimal('lingkar_bawah_celana', 5, 2)->nullable();
            $table->decimal('lingkar_ketiak', 5, 2)->nullable();
            $table->decimal('panjang_lengan', 5, 2)->nullable();
            $table->decimal('lingkar_lengan_atas', 5, 2)->nullable();
            $table->decimal('lingkar_pergelangan_tangan', 5, 2)->nullable();
            $table->decimal('tinggi_puncak_dada', 5, 2)->nullable();
            $table->decimal('jarak_puncak_dada', 5, 2)->nullable();
            $table->decimal('lingkar_leher', 5, 2)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measurement_profiles');
    }
};
