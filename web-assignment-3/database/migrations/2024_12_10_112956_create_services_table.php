<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Service title (e.g., "Weight Training Area")
            $table->text('description'); // Description of the service
            $table->string('image_url'); // Path or URL for the default image
            $table->string('hover_image_url'); // Path or URL for the hover image
            $table->timestamps(); // Created_at and updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
