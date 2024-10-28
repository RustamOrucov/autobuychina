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
        Schema::create('dealers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->required();
            $table->string('surname')->required();
            $table->string('adress')->required();
            $table->string('phone')->required();
            $table->string('d_name')->unique()->required(); 
            $table->string('email')->unique()->required();
            $table->string('password')->required();
            $table->unsignedBigInteger('view_count')->default(0);
            $table->decimal('wallet', 10, 2)->nullable();
            $table->string('passport_front')->nullable();
            $table->string('passport_back')->nullable();
            $table->string('background')->nullable();
            $table->string('logo')->nullable();
            $table->time('opening_time')->nullable();
            $table->time('closing_time')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });

        Schema::create('dealers_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dealer_id');
            $table->text('title')->nullable();
            $table->longText('content')->nullable();
            $table->string('locale')->index();
            $table->unique(['dealer_id', 'locale']);
            $table->foreign('dealer_id')->references('id')->on('dealers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dealers_translations');
        Schema::dropIfExists('dealers');
    }
};
