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
        Schema::create('condition_speciality', function (Blueprint $table) {
            $table->id();
            $table->foreignId('condition_id')->constrained('conditions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('speciality_id')->constrained('specialities')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('condition_speciality');
    }
};
