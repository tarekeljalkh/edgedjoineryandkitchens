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
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('title');            // Title of the section
            $table->text('description');        // Section description
            $table->string('image1');           // First image path
            $table->string('image2');           // Second image path
            $table->string('icon1')->nullable();  // Icon for the first feature
            $table->string('icon2')->nullable();  // Icon for the second feature
            $table->string('icon3')->nullable();  // Icon for the third feature
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('features');
    }
};
