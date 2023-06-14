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
            $table->string('banner_desktop');
            $table->string('banner_mobile');
            $table->string('banner_text', 50);
            $table->string('banner_alt', 100)->nullable();
            $table->text('about');
            $table->string('about_image_desktop');
            $table->string('about_image_mobile');
            $table->string('about_image_alt', 100)->nullable();
            $table->string('experience', 5);
            $table->string('surgeries', 5);
            $table->string('beds', 5);
            $table->string('happy_patients', 5);
            $table->string('why_choose_us_image');
            $table->string('why_choose_us_image_alt', 100);
            $table->text('why_choose_us_card1_icon');
            $table->string('why_choose_us_card1_title', 50);
            $table->string('why_choose_us_card1_description', 120);
            $table->text('why_choose_us_card2_icon');
            $table->string('why_choose_us_card2_title', 50);
            $table->string('why_choose_us_card2_description', 120);
            $table->text('why_choose_us_card3_icon');
            $table->string('why_choose_us_card3_title', 50);
            $table->string('why_choose_us_card3_description', 120);
            $table->text('why_choose_us_card4_icon');
            $table->string('why_choose_us_card4_title', 50);
            $table->string('why_choose_us_card4_description', 120);
            $table->string('reviews_text');
            $table->string('blogs_text');
            $table->string('faq_text');
            $table->tinyInteger('order_number', false, true)->nullable();
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
