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
            $table->string('name', 100);
            $table->string('contact', 20);
            $table->string('email', 150);
            $table->string('subject');
            $table->text('message');
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
