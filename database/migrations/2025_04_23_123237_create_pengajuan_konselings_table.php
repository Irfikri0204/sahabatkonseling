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
        Schema::create('pengajuan_konselings', function (Blueprint $table) {
            $table->id();

            // Data Pribadi
            $table->string('nama');
            $table->string('nim');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->integer('usia');
            $table->enum('jurusan',['JPKK', 'JTIK', 'JPTE', 'JPTO', 'JTP', 'JPTA', 'JPTSP', 'JPTM']);
            $table->string('prodi');
            $table->integer('semester');
            $table->string('no_telp');

            // Detail Masalah
            $table->enum('kategori_masalah', ['Akademik', 'Sosial', 'Karir', 'Pribadi']);
            $table->text('deskripsi_masalah');
            $table->text('sejak_kapan');
            $table->text('tindakan_yang_dilakukan');

            // Jadwal
            $table->date('tanggal');
            $table->enum('sesi', ['Pagi', 'Siang']);
            $table->enum('jenis_layanan', ['Online', 'Offline']);

            // Cek Jadwal
            $table->string('kode_konseling');
            $table->enum('status', ['Diproses', 'Ditolak', 'Diterima']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_konselings');
    }
};
