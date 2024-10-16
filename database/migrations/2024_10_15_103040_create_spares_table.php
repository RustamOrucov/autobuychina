<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('spares', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('trader_id');
            $table->unsignedBigInteger('region_id');
            $table->unsignedBigInteger('ro_id');
            $table->string('item_number')->nullable();
            $table->string('spare_image')->nullable();
            $table->string('price')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('trader_id')->references('id')->on('traders')->onDelete('cascade');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->foreign('ro_id')->references('id')->on('ros')->onDelete('cascade');
        });
        Schema::create('spares_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('spare_id');
            $table->string('name')->nullable();
            $table->text('item_comment')->nullable();
            $table->string('locale')->index();
            $table->unique(['spare_id', 'locale']);
            $table->foreign('spare_id')->references('id')->on('spares')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spares_translations');
        Schema::dropIfExists('spares');
    }
};
