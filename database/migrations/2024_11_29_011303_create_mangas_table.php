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
        Schema::create('mangas', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('img_webp');
            $table->string('img_webp_small');
            $table->string('img_webp_large');
            $table->string('title');
            $table->string('title_english');
            $table->string('title_japanese');
            $table->json('title_synonyms');
            $table->string('type');
            $table->integer('charpters');
            $table->integer('volumes');
            $table->string('status');
            $table->text('synopsis');
            $table->text('background');
            $table->json('authors');
            $table->json('genres');
            $table->json('serializations');
            $table->json('explicit_genres');
            $table->json('demographics');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mangas');
    }
};
