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
        Schema::create('contact_us_form', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['feedback', 'complaint', 'enquiry']);
            $table->string('name');
            $table->integer('country_code');
            $table->string('contact', 15);
            $table->string('email');
            $table->string('subject');
            $table->text('message');
            $table->string('utm_source')->nullable();
            $table->string('utm_medium')->nullable();
            $table->string('utm_campaign')->nullable();
            $table->string('utm_term')->nullable();
            $table->string('utm_content')->nullable();
            $table->string('utm_lms')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us_form');
    }
};
