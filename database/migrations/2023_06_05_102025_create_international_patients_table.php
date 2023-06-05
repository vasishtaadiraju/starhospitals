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
        Schema::create('international_patients', function (Blueprint $table) {
            $table->id();
            $table->string('banner_desktop');
            $table->string('banner_mobile');
            $table->string('banner_alt', 100)->nullable();
            $table->string('banner_text', 50);
            $table->text('key_highlight1_icon');
            $table->string('key_highlight1_title', 50);
            $table->string('key_highlight1_description', 150);
            $table->text('key_highlight2_icon');
            $table->string('key_highlight2_title', 50);
            $table->string('key_highlight2_description', 150);
            $table->text('key_highlight3_icon');
            $table->string('key_highlight3_title', 50);
            $table->string('key_highlight3_description', 150);
            $table->text('key_highlight4_icon');
            $table->string('key_highlight4_title', 50);
            $table->string('key_highlight4_description', 150);
            $table->string('virtual_tour_text');
            $table->string('our_process_text');
            $table->text('facilities_text');
            $table->text('reviews_text');
            $table->text('enquiry_form_text');
            $table->text('faq_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('international_patients');
    }
};
