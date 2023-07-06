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
        Schema::create('physical_consultations', function (Blueprint $table) {
            $table->id();
            $table->string('appointment_id')->nullable();
            $table->string('patient_id');
            $table->string('patient_name');
            $table->string('doctor');
            $table->string('location');
            $table->string('speciality');
            $table->string('appointment_date');
            $table->string('appointment_time');
            $table->enum('status', [true, false]);
            $table->text('response');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('physical_consultations');
    }
};
