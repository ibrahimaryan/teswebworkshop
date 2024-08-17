<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nim')->unique();
            $table->string('program_studi');
            $table->string('jurusan');
            $table->enum('training', ['multimedia', 'network', 'software']);
            $table->string('phone');
            $table->string('bukti_ss_group')->nullable();
            $table->string('bukti_follow_ig_pcc')->nullable();
            $table->string('bukti_follow_ig_workshop')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran');
    }
};
