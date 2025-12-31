<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration untuk membuat tabel users, password_reset_tokens, dan sessions.
 */
return new class extends Migration
{
    /**
     * Jalankan migrasi (membuat tabel).
     */
    public function up(): void
    {
        // Tabel users → menyimpan data akun pengguna
        Schema::create('users', function (Blueprint $table) {
            $table->id();                               // Primary key auto increment
            $table->string('username')->unique();       // Username unik
            $table->string('email')->unique();          // Email unik
            $table->string('password');                 // Password (hashed)
            $table->timestamps();                       // created_at & updated_at
        });

        // Tabel password_reset_tokens → menyimpan token reset password
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();         // Email sebagai primary key
            $table->string('token');                    // Token reset password
            $table->timestamp('created_at')->nullable();// Waktu token dibuat
        });

        // Tabel sessions → untuk session driver database
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();            // ID session
            $table->foreignId('user_id')->nullable()->index(); // Relasi ke user (opsional)
            $table->string('ip_address', 45)->nullable();      // IP address pengguna
            $table->text('user_agent')->nullable();     // Informasi browser/device
            $table->longText('payload');                // Data session
            $table->integer('last_activity')->index();  // Timestamp aktivitas terakhir
        });
    }

    /**
     * Reverse the migrations (hapus tabel).
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
