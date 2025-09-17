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
        Schema::create('form_pertanyaan_feedback', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nama')->nullable();
            $table->longText('pertanyaan')->nullable();
            $table->longText('feedback')->nullable();
            $table->boolean('rating')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_pertanyaan_feedback');
    }
};
