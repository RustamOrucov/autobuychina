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
        Schema::create('higlits', function (Blueprint $table) {
            $table->id();
            $table->boolean('status');
            $table->timestamps();
        });
        Schema::create('higlits_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('higlit_id');
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['higlit_id', 'locale']);
            $table->foreign('higlit_id')->references('id')->on('higlits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('higlits_translations');
        Schema::dropIfExists('higlits');
    }
};
