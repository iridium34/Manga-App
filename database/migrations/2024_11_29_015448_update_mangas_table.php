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
        Schema::table('mangas', function (Blueprint $table) {
            $table->string('url')->nullable()->change();
            $table->string('img_webp')->nullable()->change();
            $table->string('img_webp_small')->nullable()->change();
            $table->string('img_webp_large')->nullable()->change();
            $table->string('title')->nullable()->change();
            $table->string('title_english')->nullable()->change();
            $table->string('title_japanese')->nullable()->change();
            $table->json('title_synonyms')->nullable()->change();
            $table->string('type')->nullable()->change();
            $table->integer('chapters')->nullable()->change();
            $table->integer('volumes')->nullable()->change();
            $table->string('status')->nullable()->change();
            $table->text('synopsis')->nullable()->change();
            $table->text('background')->nullable()->change();
            $table->json('authors')->nullable()->change();
            $table->json('genres')->nullable()->change();
            $table->json('serializations')->nullable()->change();
            $table->json('explicit_genres')->nullable()->change();
            $table->json('demographics')->nullable()->change();
            $table->json('chapters')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
