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
        Schema::create('regis_organisasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_organisasi');
            $table->string('nama_organisasi');
            $table->unsignedBigInteger('id_pengguna');
            $table->string('nama_pengguna');
            $table->string('timestamps');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regis_organisasi');
    }
};
