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
        Schema::create('specialists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')->nullable()->constrained('regions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('branch_id')->nullable()->constrained('branches')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('speciality_id')->nullable()->constrained('specialities')->onUpdate('cascade')->onDelete('cascade');
            $table->string('banner_desktop')->nullable();
            $table->string('banner_mobile')->nullable();
            $table->string('banner_alt', 100)->nullable();
            $table->string('our_specialist_text')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('description_image')->nullable();
            $table->string('description_image_alt')->nullable();
            $table->string('reviews_text')->nullable();
            $table->string('doctors_text')->nullable();
            $table->string('media_text')->nullable();
            $table->string('faq_text')->nullable();
            $table->string('slug', 100)->nullable()->unique();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialists');
    }
};
