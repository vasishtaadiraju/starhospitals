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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email', 100)->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->string('designation', 50)->nullable();
            $table->string('qualification', 100)->nullable();
            $table->string('experience', 20)->nullable();
            $table->string('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->text('publications')->nullable();
            $table->text('affiliations_and_fellowships')->nullable();
            $table->text('expertise')->nullable();
            $table->text('memberships')->nullable();
            $table->string('slug', 50)->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('small_image', 100)->nullable();
            $table->string('small_image_alt', 100)->nullable();
            $table->string('large_image', 100)->nullable();
            $table->string('large_image_alt', 100)->nullable();
            $table->string('canonical')->nullable();
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
        Schema::dropIfExists('users');
    }
};
