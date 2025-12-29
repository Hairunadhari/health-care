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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('status_pembayaran')->default('pending');
            $table->bigInteger('total_harga');
            $table->dateTime('tanggal_keberangkatan');
            $table->string('kota_tujuan');
            $table->string('nama_pemesan');
            $table->string('email_pemesan');
            $table->bigInteger('no_telp_pemesan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
