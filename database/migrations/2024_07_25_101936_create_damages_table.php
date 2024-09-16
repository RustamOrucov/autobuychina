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
        Schema::create('damages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('damages_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('damage_id');
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['damage_id', 'locale']);
            $table->foreign('damage_id')->references('id')->on('damages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('damages_translations');
        Schema::dropIfExists('damages');
    }
};
