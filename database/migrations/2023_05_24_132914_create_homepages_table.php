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
            $table->text('meet_our_specialist_text');
            $table->string('why_choose_us_image');
            $table->string('why_choose_us_image_alt', 100)->nullable();
            $table->text('choose1_icon');
            $table->string('choose1_title', 50);
            $table->string('choose1_description', 120);
            $table->text('choose2_icon');
            $table->string('choose2_title', 50);
            $table->string('choose2_description', 120);
            $table->text('choose3_icon');
            $table->string('choose3_title', 50);
            $table->string('choose3_description', 120);
            $table->text('choose4_icon');
            $table->string('choose4_title', 50);
            $table->string('choose4_description', 120);
            $table->string('about_thumbnail');
            $table->string('about_video_link');
            $table->text('about_description');
            $table->text('review_text');
            $table->text('blog_text');
            $table->text('media_text');
            $table->text('contact_text');
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
