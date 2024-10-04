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
        Schema::create('cylinders', function (Blueprint $table) {
            $table->id();
            $table->string('hex')->nullable();
            $table->boolean('status');
            $table->timestamps();
        });
        Schema::create('cylinders_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cylinder_id');
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['cylinder_id', 'locale']);
            $table->foreign('cylinder_id')->references('id')->on('cylinders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cylinders_translations');
        Schema::dropIfExists('cylinder');
    }
};
