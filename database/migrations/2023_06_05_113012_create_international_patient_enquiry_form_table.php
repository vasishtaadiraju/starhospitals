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
        Schema::create('international_patient_enquiry_form', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->integer('country_code');
            $table->string('contact');
            $table->string('country', 60);
            $table->string('preferred_location', 50);
            $table->string('report');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('international_patient_enquiry_form');
    }
};
