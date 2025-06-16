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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id(); // Primary key for the table

            // Registration Details
            $table->date('tanggal_pendaftaran');
            $table->enum('status_pendaftaran', ['baru', 'lama'])->default('baru');

            // Business Information
            $table->string('nama_usaha');
            $table->string('alamat_usaha');

            // penambahan kolom inputan
            $table->text('nama_nama_produk');
            $table->text('nama_nama_bahan_merek');
            $table->text('pdf_nama_nama_produk');
            $table->text('pdf_nama_nama_bahan_merek');
            $table->string('alamat_outlet');
            $table->string('kemasan');
            $table->string('cleaning_agent');
            $table->string('denah');
            $table->string('area_pemasaran');
            $table->string('jenis_produk');

            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('kode_pos', 10);
            $table->enum('skala_usaha', ['mikro', 'kecil']);
            $table->string('lokasi_produksi');
            $table->enum('status_usaha', ['pribadi', 'bersama']);
            $table->string('email_usaha');
            $table->string('no_hp_usaha', 20);

            // Personal/Contact Person Information
            $table->string('nama_lengkap');

            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat_domisili');

            $table->string('no_ktp', 16);
            $table->string('email_pribadi');
            $table->string('no_hp', 20);
            $table->string('penanggung_jawab');
            $table->string('jabatan');

            // File Upload Columns (will store the file paths or unique identifiers)
            $table->string('ktp'); // Stores path/identifier for KTP
            $table->string('nib')->nullable(); // Stores path/identifier for NIB (optional)
            $table->string('npwp')->nullable(); // Stores path/identifier for NPWP (optional)
            $table->string('logo_usaha')->nullable(); // Stores path/identifier for Logo Usaha

            $table->timestamps(); // Adds `created_at` and `updated_at` columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
