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
        Schema::create('ros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('ros_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ro_id');
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['ro_id', 'locale']);
            $table->foreign('ro_id')->references('id')->on('ros')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ros_translations');
        Schema::dropIfExists('ros');
    }
};
