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
        Schema::create('peserta', function (Blueprint $table) {
            $table->id('id_peserta');
            $table->string('nama',255);
            $table->string('nim',20);
            $table->string('prodi',255);
            $table->string('jurusan',255);
            $table->string('pelatihan',255);
            $table->string('nowa',255);
            $table->string('ss_angtif')->nullable();
            $table->string('ss_pcc')->nullable();
            $table->string('ss_workshop')->nullable();
            $table->string('status',20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta');
    }
};
