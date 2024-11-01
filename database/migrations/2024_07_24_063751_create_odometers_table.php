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
        Schema::create('odometers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('odometers_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('odometer_id');
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['odometer_id', 'locale']);
            $table->foreign('odometer_id')->references('id')->on('odometers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('odometers_translations');
        Schema::dropIfExists('odometers');
    }
};
