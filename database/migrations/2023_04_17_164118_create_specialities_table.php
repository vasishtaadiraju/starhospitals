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
            $table->text('icon_image')->nullable();
            $table->string('banner_desktop');
            $table->string('banner_mobile');
            $table->string('banner_alt', 100)->nullable();
            $table->string('banner_text');
            $table->text('description');
            $table->string('description_image');
            $table->string('description_image_alt', 100)->nullable();
            $table->string('our_doctors_text');
            $table->string('our_locations_text');
            $table->string('services_treatments_image1')->nullable();
            $table->string('services_treatments_image2')->nullable();
            $table->text('services_treatments');
            $table->string('reviews_text');
            $table->string('blogs_text');
            $table->string('media_text');
            $table->string('faq_text');
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
