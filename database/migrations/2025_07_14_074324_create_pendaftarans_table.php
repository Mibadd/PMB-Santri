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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();

            // Relasi ke tabel users, jika user dihapus, data pendaftarannya juga terhapus
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // --- Data Formulir ---
            $table->enum('kategori', ['Reguler', 'Non Reguler']); 
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']); 
            $table->text('alamat'); 
            $table->string('asal_sekolah'); 
            $table->string('sedang_kuliah_dimana')->nullable(); 
            $table->boolean('pernyataan_persetujuan')->default(false); 
            
            // --- Status & Pembayaran ---
            $table->enum('status_pembayaran_formulir', [
                'menunggu_pembayaran', 
                'menunggu_konfirmasi', 
                'lunas', 
                'ditolak'
            ])->default('menunggu_pembayaran'); // Alur pembayaran formulir [cite: 20, 30]

            $table->string('bukti_pembayaran_formulir')->nullable(); 
            
            $table->enum('status_pendaftaran', [
                'proses', 
                'diterima', 
                'ditolak'
            ])->default('proses'); // Status akhir, karena tidak ada tes, akan langsung diterima setelah konfirmasi [cite: 11, 30]

            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};