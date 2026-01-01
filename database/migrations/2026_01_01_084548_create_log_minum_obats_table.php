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
        Schema::create('log_minum_obats', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jadwal_obat_id');
            $table->bigInteger('user_id');
            $table->time('jam');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_minum_obats');
    }
};
