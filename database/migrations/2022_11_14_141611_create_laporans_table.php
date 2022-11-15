<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('nama');
            $table->string('jurusan');
            $table->string('tanggal_laporan');
            $table->string('waktu_laporan');
            $table->text('keterangan_laporan');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('foto_laporan');
            $table->string('video_laporan');
            $table->boolean('is_valid');
            $table->boolean('is_process');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporans');
    }
};
