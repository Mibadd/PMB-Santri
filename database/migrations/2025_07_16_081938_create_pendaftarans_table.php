// File: ...create_pendaftarans_table.php
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Detail Pribadi
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('no_hp_orang_tua');

            // Data Formulir
            $table->enum('kategori', ['Reguler', 'Non Reguler']);
            $table->string('no_kip')->nullable();
            $table->string('dokumen_kip')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->text('alamat');
            $table->string('asal_sekolah');
            $table->boolean('pernyataan_persetujuan')->default(false);

            // Status (akan digunakan nanti)
            $table->string('status_pembayaran_formulir')->default('menunggu_pembayaran');
            $table->string('status_pendaftaran')->default('proses');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};