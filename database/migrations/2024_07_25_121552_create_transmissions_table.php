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
        Schema::create('transmissions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('transmissions_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transmission_id');
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['transmission_id', 'locale']);
            $table->foreign('transmission_id')->references('id')->on('transmissions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transmissions_translations');
        Schema::dropIfExists('transmissions');
    }
};
