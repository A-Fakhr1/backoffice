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
        Schema::create('saldocoas', function (Blueprint $table) {
            $table->id();
            $table->string('saldo_awal')->nullable();
            $table->string('anggaran')->nullable();
            $table->string('target')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('no_coa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saldocoas');
    }
};