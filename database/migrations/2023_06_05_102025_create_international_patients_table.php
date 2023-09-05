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
            $table->string('banner_desktop')->nullable();
            $table->string('banner_mobile')->nullable();
            $table->string('banner_alt', 100)->nullable();
            $table->string('banner_text', 50)->nullable();
            $table->text('key_highlight1_icon')->nullable();
            $table->string('key_highlight1_title', 50)->nullable();
            $table->string('key_highlight1_description', 150)->nullable();
            $table->text('key_highlight2_icon')->nullable();
            $table->string('key_highlight2_title', 50)->nullable();
            $table->string('key_highlight2_description', 150)->nullable();
            $table->text('key_highlight3_icon')->nullable();
            $table->string('key_highlight3_title', 50)->nullable();
            $table->string('key_highlight3_description', 150)->nullable();
            $table->text('key_highlight4_icon')->nullable();
            $table->string('key_highlight4_title', 50)->nullable();
            $table->string('key_highlight4_description', 150)->nullable();
            $table->string('virtual_tour_text')->nullable();
            $table->text('our_process_text')->nullable();
            $table->text('facilities_text')->nullable();
            $table->text('reviews_text')->nullable();
            $table->text('enquiry_form_text')->nullable();
            $table->text('faq_text')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
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
