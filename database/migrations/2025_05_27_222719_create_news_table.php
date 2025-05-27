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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // Title of the news
            $table->longText('deskripsi'); // Description/content of the news
            $table->string('sampul')->nullable(); // Path to the cover image
            $table->foreignId('id_user')->constrained('users')->onDelete('set null'); // User who created the news
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
