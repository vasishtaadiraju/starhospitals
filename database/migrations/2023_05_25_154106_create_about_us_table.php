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
            $table->string('banner_desktop');
            $table->string('banner_mobile');
            $table->string('banner_alt', 100)->nullable();
            $table->string('banner_text', 50);
            $table->text('vision');
            $table->text('mission');
            $table->text('chairman_desk');
            $table->string('video_thumbnail');
            $table->string('video_link');
            $table->string('title', 50);
            $table->text('description');
            $table->string('our_locations_text');
            $table->string('photo_gallery_text');
            $table->string('faq_text');
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
