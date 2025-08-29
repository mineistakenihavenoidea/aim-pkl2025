<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');         // News title
            $table->text('konten');         // News content
            $table->foreignId('user_id')     // Who posted it
                  ->constrained()
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
