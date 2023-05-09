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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('author', 50);
            $table->string('designation', 50);
            $table->text('address');
            $table->string('image');
            $table->string('image_alt', 100)->nullable();
            $table->text('description');
            $table->string('banner_desktop');
            $table->string('banner_desktop_alt', 100)->nullable();
            $table->string('banner_mobile');
            $table->string('banner_mobile_alt', 100)->nullable();
            $table->date('published_date');
            $table->string('slug', 50)->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description', 50)->nullable();
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
        Schema::dropIfExists('blogs');
    }
};
