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
        Schema::create('film', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('poster')->nullable();
            $table->string('judul');
            $table->text('deskripsi');
            $table->year('tahun_rilis');
            $table->integer('durasi')->comment('Duration in minutes');
            $table->decimal('rate_imdb', 3, 1)->comment('Rating out of 10');
            $table->enum('jenis', ['series', 'film']);
            $table->enum('kategori_usia', ['Anak', 'Remaja', 'Dewasa']);
            $table->string('link_streaming')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film');
    }
};
