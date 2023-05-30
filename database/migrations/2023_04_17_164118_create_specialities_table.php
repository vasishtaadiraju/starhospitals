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
            $table->string('icon_image', 100)->nullable();
            $table->string('icon_image_alt', 100)->nullable();
            $table->string('banner_desktop', 100)->nullable();
            $table->string('banner_desktop_alt', 100)->nullable();
            $table->string('banner_mobile', 100)->nullable();
            $table->string('banner_mobile_alt', 100)->nullable();
            $table->string('banner_text')->nullable();
            $table->text('description')->nullable();
            $table->string('description_image', 100)->nullable();
            $table->string('description_image_alt', 100)->nullable();
            $table->string('our_locations_text')->nullable();
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
