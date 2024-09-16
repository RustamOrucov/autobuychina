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
        Schema::create('model_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_models_id')->nullable();
            $table->timestamps();
            $table->foreign('car_models_id')->references('id')->on('carmodels')->onDelete('cascade');
        });
        Schema::create('model_types_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('modeltype_id');
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['modeltype_id', 'locale']);
            $table->foreign('modeltype_id')->references('id')->on('model_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_types_translations');
        Schema::dropIfExists('model_types');
    }
};
