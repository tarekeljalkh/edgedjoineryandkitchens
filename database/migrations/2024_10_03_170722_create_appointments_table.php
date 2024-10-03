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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name');             // Client name
            $table->string('email');            // Client email
            $table->string('phone');            // Client phone number
            $table->string('service');          // Chosen service
            $table->date('preferred_date');     // Preferred appointment date
            $table->time('preferred_time');     // Preferred appointment time
            $table->text('additional_details')->nullable(); // Additional details or questions
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
