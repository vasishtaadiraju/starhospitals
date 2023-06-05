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
            $table->string('banner_desktop');
            $table->string('banner_mobile');
            $table->string('banner_alt', 100)->nullable();
            $table->string('banner_text', 50);
            $table->string('why_star_text');
            $table->string('why_star_image');
            $table->string('why_star_image_alt', 100);
            $table->text('why_star_card1_icon');
            $table->string('why_star_card1_title', 50);
            $table->string('why_star_card1_description', 100);
            $table->text('why_star_card2_icon');
            $table->string('why_star_card2_title', 50);
            $table->string('why_star_card2_description', 100);
            $table->text('why_star_card3_icon');
            $table->string('why_star_card3_title', 50);
            $table->string('why_star_card3_description', 100);
            $table->text('why_star_card4_icon');
            $table->string('why_star_card4_title', 50);
            $table->string('why_star_card4_description', 100);
            $table->string('workforce_text');
            $table->string('faq_text');
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
