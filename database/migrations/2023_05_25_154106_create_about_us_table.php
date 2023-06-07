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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('banner_desktop')->nullable();
            $table->string('banner_mobile')->nullable();
            $table->string('banner_alt', 100)->nullable();
            $table->string('banner_text', 50)->nullable();
            $table->string('vision_title', 50)->nullable();
            $table->text('vision_description')->nullable();
            $table->string('mission_title', 50)->nullable();
            $table->text('mission_description')->nullable();
            $table->string('chairman_desk_title', 50)->nullable();
            $table->text('chairman_desk_description')->nullable();
            $table->string('video_thumbnail')->nullable();
            $table->string('video_link')->nullable();
            $table->string('title', 50)->nullable();
            $table->text('description')->nullable();
            $table->string('our_locations_text')->nullable();
            $table->string('photo_gallery_text')->nullable();
            $table->string('faq_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
