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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('ref')->nullable();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('categorie')->nullable();
            $table->string('blockote')->nullable();
            $table->string('paragraphe1')->nullable();
            $table->string('paragraphe2')->nullable();
            $table->string('paragraphe3')->nullable();
            $table->string('paragraphe4')->nullable();
            $table->string('paragraphe5')->nullable();
            $table->string('paragraphe6')->nullable();
            $table->string('paragraphe7')->nullable();
            $table->string('paragraphe8')->nullable();
            $table->string('paragraphe9')->nullable();
            $table->string('paragraphe10')->nullable();
            $table->string('priority')->default('simple');
            $table->string('view')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
