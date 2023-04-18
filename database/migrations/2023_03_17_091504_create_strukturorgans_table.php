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
        Schema::create('strukturorgan', function (Blueprint $table) {
            $table->id();
            $table->string('akun_no')->unique();
            $table->string('dept_name');
            $table->string('dept_head')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('id_comp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strukturorgans');
    }
};
