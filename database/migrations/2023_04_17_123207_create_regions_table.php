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
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->string('icon_image', 100)->nullable();
            $table->string('icon_image_alt', 100)->nullable();
            $table->string('image', 100)->nullable();
            $table->string('image_alt', 100)->nullable();
            $table->integer('latitude')->nullable();
            $table->integer('longitude')->nullable();
            $table->string('slug', 50)->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->tinyInteger('order_number', false, true)->nullable();
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
        Schema::dropIfExists('regions');
    }
};
