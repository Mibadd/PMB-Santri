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
        Schema::table('users', function (Blueprint $table) {
            // Menambahkan kolom no_telp setelah kolom email [cite: 16]
            $table->string('no_telp')->after('email');

            // Menambahkan kolom role untuk membedakan admin dan calon santri [cite: 12, 33]
            $table->string('role')->default('calon_santri')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['no_telp', 'role']);
        });
    }
};