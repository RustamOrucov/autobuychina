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
        Schema::create('spare_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('spare_id');
            $table->string('image');
            $table->timestamps();
            $table->foreign('spare_id')->references('id')->on('spares')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spare_images');
    }
};
