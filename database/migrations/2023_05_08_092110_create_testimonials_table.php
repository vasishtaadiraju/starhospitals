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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('patient_name', 50);
            $table->string('feedback');
            $table->enum('type', ['image', 'video']);
            $table->string('image')->nullable();
            $table->string('image_alt', 100)->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('video_link')->nullable();
            $table->string('slug', 50)->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->enum('homepage', ['yes', 'no']);
            $table->tinyInteger('homepage_order_number', false, true)->nullable()->unique();
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
        Schema::dropIfExists('testimonials');
    }
};
