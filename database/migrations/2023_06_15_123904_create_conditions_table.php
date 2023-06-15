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
        Schema::create('conditions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('short_description')->nullable();
            $table->text('symptoms_causes')->nullable();
            $table->text('diagnosis_treatment')->nullable();
            $table->text('care_at_star_hospitals')->nullable();
            $table->string('symptoms_causes_slug', 50)->nullable();
            $table->string('diagnosis_treatment_slug', 50)->nullable();
            $table->string('care_at_star_hospitals_slug', 50)->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
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
        Schema::dropIfExists('conditions');
    }
};
