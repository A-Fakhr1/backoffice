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
        Schema::create('approvees', function (Blueprint $table) {
            $table->id();
            $table->string('po_pemesan');
            $table->string('po_mengetahui');
            $table->string('po_setuju');
            $table->string('ttdp_invoice');
            $table->string('jabatan_invoice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approvees');
    }
};