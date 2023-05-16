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
        Schema::create('jurnal_umums', function (Blueprint $table) {
            $table->id();
            $table->string('no_jurnal');
            $table->date('tanggal')->nullable();
            $table->string('no_dokumen');
            $table->string('no_referensi');
            $table->string('keterangan');
            $table->string('akuncoa');
            $table->bigInteger('debit');
            $table->bigInteger('kredit');
            $table->string('dept_name');
            $table->enum('status', ['DRAF','NONDRAF'])->default('DRAF');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurnal_umums');
    }
};