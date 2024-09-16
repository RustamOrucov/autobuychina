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
        Schema::create('carmodels', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
        Schema::create('carmodels_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carmodel_id');
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['carmodel_id', 'locale']);
            $table->foreign('carmodel_id')->references('id')->on('carmodels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carmodels_translations');
        Schema::dropIfExists('carmodels');
    }
};
