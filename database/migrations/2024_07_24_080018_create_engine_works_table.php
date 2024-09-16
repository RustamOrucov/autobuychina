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
        Schema::create('engine_works', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('engine_works_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('engine_work_id');
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['engine_work_id', 'locale']);
            $table->foreign('engine_work_id')->references('id')->on('engine_works')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('engine_works_translations');
        Schema::dropIfExists('engine_works');
    }
};
