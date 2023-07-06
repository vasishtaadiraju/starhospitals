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
            $table->integer('his_id')->nullable();
            $table->string('card_image')->nullable();
            $table->string('card_image_alt', 100)->nullable();
            $table->text('address')->nullable();
            $table->string('banner_desktop')->nullable();
            $table->string('banner_mobile')->nullable();
            $table->string('banner_text', 50)->nullable();
            $table->string('banner_alt', 100)->nullable();
            $table->text('about')->nullable();
            $table->string('about_image_desktop')->nullable();
            $table->string('about_image_mobile')->nullable();
            $table->string('about_image_alt', 100)->nullable();
            $table->string('skilled_experienced_doctors', 5)->nullable();
            $table->string('surgeries', 5)->nullable();
            $table->string('beds', 5)->nullable();
            $table->string('happy_patients', 10)->nullable();
            $table->string('why_choose_us_image')->nullable();
            $table->string('why_choose_us_image_alt', 100)->nullable();
            $table->text('choose1_icon')->nullable();
            $table->string('choose1_title', 50)->nullable();
            $table->string('choose1_description', 120)->nullable();
            $table->text('choose2_icon')->nullable();
            $table->string('choose2_title', 50)->nullable();
            $table->string('choose2_description', 120)->nullable();
            $table->text('choose3_icon')->nullable();
            $table->string('choose3_title', 50)->nullable();
            $table->string('choose3_description', 120)->nullable();
            $table->text('choose4_icon')->nullable();
            $table->string('choose4_title', 50)->nullable();
            $table->string('choose4_description', 120)->nullable();
            $table->string('reviews_text')->nullable();
            $table->string('blogs_text')->nullable();
            $table->string('faq_text')->nullable();
            $table->tinyInteger('order_number', false, true)->nullable();
            $table->string('slug', 50)->nullable()->unique();
            $table->string('map_link')->nullable();
            $table->string('embed_map_link')->nullable();
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
