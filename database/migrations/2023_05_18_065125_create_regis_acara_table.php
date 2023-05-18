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
        Schema::create('regis_acara', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_acara');
            $table->string('nama_acara');
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
        Schema::dropIfExists('regis_acara');
    }
};
