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
        Schema::create('statics', function (Blueprint $table) {
            $table->id();
            $table->string('key')->nullable();
            $table->timestamps();
        });
        Schema::create('statics_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('static_model_id');
            $table->string('locale')->index();
            $table->string('title')->nullable();
            $table->string('text')->nullable();
            $table->string('desc')->nullable();
            $table->string('name')->nullable();
            $table->unique(['static_model_id', 'locale']);
            $table->foreign('static_model_id')->references('id')->on('statics')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('static_translations');
        Schema::dropIfExists('statics');
    }
};
