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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();       // Site Name
            $table->string('logo')->nullable();            // Logo Path
            $table->string('whatsapp_number')->nullable(); // WhatsApp Number
            $table->string('email')->nullable();           // Email Address
            $table->string('phone')->nullable();           // Phone Number
            $table->string('facebook_link')->nullable();   // Facebook URL
            $table->string('instagram_link')->nullable();  // Instagram URL
            $table->string('seo_title')->nullable();       // SEO Title
            $table->text('seo_description')->nullable();   // SEO Description
            $table->text('seo_keywords')->nullable();      // SEO Keywords
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
