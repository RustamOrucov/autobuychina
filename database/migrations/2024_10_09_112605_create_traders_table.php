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
        Schema::create('traders', function (Blueprint $table) {
            $table->id();
            $table->string('name')->required();
            $table->string('surname')->required();
            $table->string('adress')->required();
            $table->string('phone')->required();
            $table->string('t_name')->unique()->required();
            $table->string('email')->unique()->required();
            $table->string('password')->required();
            $table->unsignedBigInteger('view_count')->default(0);
            $table->decimal('wallet', 10, 2)->nullable();
            $table->string('passport_front')->nullable();
            $table->string('passport_back')->nullable();
            $table->string('background')->nullable();
            $table->string('business_foto')->nullable();
            $table->string('license_number')->nullable();
            $table->string('logo')->nullable();
            $table->time('opening_time')->nullable();
            $table->time('closing_time')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
        Schema::create('traders_translations', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('trader_id');
        $table->text('title')->nullable();
        $table->longText('content')->nullable();
        $table->string('locale')->index();
        $table->unique(['trader_id', 'locale']);
        $table->foreign('trader_id')->references('id')->on('traders')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traders_translations');
        Schema::dropIfExists('traders');
    }
};
