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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150)->nullable();
            $table->string('media_name', 50)->nullable();
            $table->string('image')->nullable();
            $table->string('image_alt', 100)->nullable();
            $table->string('media_link')->nullable();
            $table->date('published_date')->nullable();
            $table->string('slug', 50)->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description', 50)->nullable();
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
        Schema::dropIfExists('media');
    }
};
