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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('banner_desktop')->nullable();
            $table->string('banner_mobile')->nullable();
            $table->string('banner_alt', 100)->nullable();
            $table->string('banner_text', 50)->nullable();
            $table->string('why_star_text')->nullable();
            $table->string('why_star_image')->nullable();
            $table->string('why_star_image_alt', 100)->nullable();
            $table->text('why_star_card1_icon')->nullable();
            $table->string('why_star_card1_title', 50)->nullable();
            $table->string('why_star_card1_description', 100)->nullable();
            $table->text('why_star_card2_icon')->nullable();
            $table->string('why_star_card2_title', 50)->nullable();
            $table->string('why_star_card2_description', 100)->nullable();
            $table->text('why_star_card3_icon')->nullable();
            $table->string('why_star_card3_title', 50)->nullable();
            $table->string('why_star_card3_description', 100)->nullable();
            $table->text('why_star_card4_icon')->nullable();
            $table->string('why_star_card4_title', 50)->nullable();
            $table->string('why_star_card4_description', 100)->nullable();
            $table->string('workforce_text')->nullable();
            $table->string('faq_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
