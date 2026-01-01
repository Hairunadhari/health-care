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
        Schema::create('jadwal_obats', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('dosis')->nullable();
            $table->string('frekuensi_hari')->nullable();
            $table->string('frekuensi_jam')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_obats');
    }
};
