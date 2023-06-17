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
        Schema::create('specialities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->tinyInteger('order_number', false, true)->nullable();
            $table->text('icon_image')->nullable();
            $table->string('homepage_image')->nullable();
            $table->string('homepage_image_alt', 100)->nullable();
            $table->text('homepage_description')->nullable();
            $table->string('banner_desktop')->nullable();
            $table->string('banner_mobile')->nullable();
            $table->string('banner_alt', 100)->nullable();
            $table->string('banner_text')->nullable();
            $table->text('description')->nullable();
            $table->string('description_image')->nullable();
            $table->string('description_image_alt', 100)->nullable();
            $table->string('our_doctors_text')->nullable();
            $table->string('our_locations_text')->nullable();
            $table->string('services_treatments_image1')->nullable();
            $table->string('services_treatments_image2')->nullable();
            $table->text('services_treatments')->nullable();
            $table->string('reviews_text')->nullable();
            $table->string('blogs_text')->nullable();
            $table->string('media_text')->nullable();
            $table->string('faq_text')->nullable();
            $table->string('slug', 50)->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('schema_headline')->nullable();
            $table->string('schema_name')->nullable();
            $table->string('schema_description')->nullable();
            $table->string('schema_image')->nullable();
            $table->string('schema_keywords')->nullable();
            $table->enum('status', ['active', 'inactive']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialities');
    }
};
