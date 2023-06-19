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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->integer('his_id')->nullable();
            $table->string('designation', 100)->nullable();
            $table->text('qualification')->nullable();
            $table->string('experience', 5)->nullable();
            $table->text('experience_description')->nullable();
            $table->integer('fee')->nullable();
            $table->text('expertise')->nullable();
            $table->text('research_publications')->nullable();
            $table->text('certifications_memberships')->nullable();
            $table->string('small_image')->nullable();
            $table->string('small_image_alt', 100)->nullable();
            $table->string('large_image')->nullable();
            $table->string('large_image_alt', 100)->nullable();
            $table->integer('order_number')->nullable();
            $table->string('blogs_text')->nullable();
            $table->string('media_text')->nullable();
            $table->enum('video_consultation', ['yes', 'no']);
            $table->string('canonical')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('schema_name')->nullable();
            $table->string('schema_description')->nullable();
            $table->string('schema_image')->nullable();
            $table->string('schema_openingHours')->nullable();
            $table->string('schema_addressLocality')->nullable();
            $table->string('schema_addressRegion')->nullable();
            $table->string('schema_postalCode')->nullable();
            $table->string('schema_streetAddress')->nullable();
            $table->string('schema_telephone')->nullable();
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
        Schema::dropIfExists('doctors');
    }
};
