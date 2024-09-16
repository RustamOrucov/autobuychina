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
        Schema::create('bans', function (Blueprint $table) {
            $table->id();
            $table->boolean('status');
            $table->timestamps();
        });
        Schema::create('bans_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ban_id');
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['ban_id', 'locale']);
            $table->foreign('ban_id')->references('id')->on('bans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bans_translations');
        Schema::dropIfExists('bans');
    }
};
