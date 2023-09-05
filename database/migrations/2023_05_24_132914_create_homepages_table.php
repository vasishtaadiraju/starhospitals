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
        Schema::create('homepage', function (Blueprint $table) {
            $table->id();
            $table->string('banner1_desktop')->nullable();
            $table->string('banner1_mobile')->nullable();
            $table->string('banner1_alt', 100)->nullable();
            $table->string('banner1_title', 50)->nullable();
            $table->string('banner1_description', 150)->nullable();
            $table->string('banner1_cta')->nullable();
            $table->string('banner2_desktop')->nullable();
            $table->string('banner2_mobile')->nullable();
            $table->string('banner2_alt', 100)->nullable();
            $table->string('banner2_title', 50)->nullable();
            $table->string('banner2_description', 130)->nullable();
            $table->string('banner2_cta')->nullable();
            $table->string('banner3_desktop')->nullable();
            $table->string('banner3_mobile')->nullable();
            $table->string('banner3_alt', 100)->nullable();
            $table->string('banner3_title', 50)->nullable();
            $table->string('banner3_description', 130)->nullable();
            $table->string('banner3_cta')->nullable();
            $table->string('banner4_desktop')->nullable();
            $table->string('banner4_mobile')->nullable();
            $table->string('banner4_alt', 100)->nullable();
            $table->string('banner4_title', 50)->nullable();
            $table->string('banner4_description', 130)->nullable();
            $table->string('banner4_cta')->nullable();
            $table->text('meet_our_specialist_text')->nullable();
            $table->string('why_choose_us_image')->nullable();
            $table->string('why_choose_us_image_alt', 100)->nullable();
            $table->text('choose1_icon')->nullable();
            $table->string('choose1_title', 50)->nullable();
            $table->string('choose1_description', 120)->nullable();
            $table->text('choose2_icon')->nullable();
            $table->string('choose2_title', 50)->nullable();
            $table->string('choose2_description', 120)->nullable();
            $table->text('choose3_icon')->nullable();
            $table->string('choose3_title', 50)->nullable();
            $table->string('choose3_description', 120)->nullable();
            $table->text('choose4_icon')->nullable();
            $table->string('choose4_title', 50)->nullable();
            $table->string('choose4_description', 120)->nullable();
            $table->string('about_thumbnail')->nullable();
            $table->string('about_video_link')->nullable();
            $table->text('about_description')->nullable();
            $table->text('review_text')->nullable();
            $table->text('blog_text')->nullable();
            $table->text('media_text')->nullable();
            $table->text('contact_text')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepages');
    }
};
