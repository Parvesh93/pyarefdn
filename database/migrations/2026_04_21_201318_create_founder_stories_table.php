<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('founder_stories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->longText('content')->nullable();
            $table->string('story_image')->nullable();     // card image / thumbnail
            $table->string('original_scan')->nullable();   // full original clipping
            $table->string('source_name')->nullable();     // newspaper/source
            $table->date('story_date')->nullable();
            $table->string('founder_name')->default('Pyare Lal Kaul');
            $table->boolean('is_featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('founder_stories');
    }
};