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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('no_pegawai');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->dateTime('tanggal_lahir');
            $table->string('agama');
            $table->boolean('status_kawin');
            $table->string('alamat');
            $table->string('no_hp');
            $table->dateTime('mulai_kerja');
            $table->string('divisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
