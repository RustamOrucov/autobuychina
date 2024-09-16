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
        Schema::create('drives', function (Blueprint $table) {
            $table->id();
            $table->boolean('status');
            $table->timestamps();
        });
        Schema::create('drives_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drive_id');
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['drive_id', 'locale']);
            $table->foreign('drive_id')->references('id')->on('drives')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drives_translations');
        Schema::dropIfExists('drives');
    }
};
