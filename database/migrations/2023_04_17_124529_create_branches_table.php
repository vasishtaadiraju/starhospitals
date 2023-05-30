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
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->foreignId('region_id')->constrained('regions')->onUpdate('cascade')->onDelete('cascade');
            $table->string('contact', 20)->nullable();
            $table->text('address')->nullable();
            $table->string('email', 50)->nullable();
            $table->tinyInteger('order_number', false, true)->nullable();
            $table->string('bg_image_desktop', 100)->nullable();
            $table->string('bg_image_desktop_alt', 100)->nullable();
            $table->string('bg_image_mobile', 100)->nullable();
            $table->string('bg_image_mobile_alt', 100)->nullable();
            $table->string('banner_desktop', 100)->nullable();
            $table->string('banner_desktop_alt', 100)->nullable();
            $table->string('banner_mobile', 100)->nullable();
            $table->string('banner_mobile_alt', 100)->nullable();
            $table->string('card_image')->nullable();
            $table->text('about')->nullable();
            $table->string('about_image', 100)->nullable();
            $table->string('about_image_alt', 100)->nullable();
            $table->smallInteger('no_of_doctors', false, true)->nullable();
            $table->smallInteger('no_of_nurses', false, true)->nullable();
            $table->smallInteger('no_of_beds', false, true)->nullable();
            $table->string('walk_through')->nullable();
            $table->string('utm_link')->nullable();
            $table->string('map_link')->nullable();
            $table->string('embed_map_link')->nullable();
            $table->string('slug', 50)->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('schema_name')->nullable();
            $table->string('schema_description')->nullable();
            $table->string('schema_image')->nullable();
            $table->string('schema_opens')->nullable();
            $table->string('schema_closes')->nullable();
            $table->string('schema_telephone')->nullable();
            $table->string('schema_postalCode')->nullable();
            $table->string('schema_latitude')->nullable();
            $table->string('schema_longitude')->nullable();
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
        Schema::dropIfExists('branches');
    }
};
