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
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image1_detail');
            $table->string('image2_detail');
            $table->string('image3_detail')->nullable();
            $table->string('image4_detail')->nullable();
            $table->string('categories');
            $table->text('about');
            $table->decimal('price_per_hour', 10, 2);
            $table->decimal('price_per_day', 10, 2);
            $table->boolean('show');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facilities');
    }
};
