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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('year')->nullable();
            $table->string('lot')->nullable();
            $table->string('item_number')->nullable();
            $table->string('warning_lights')->nullable();
            $table->string('actual')->nullable();
            $table->string('of_passenger')->nullable();
            $table->string('key')->nullable();
            $table->datetime('registration_date')->nullable();
            $table->text('youtube_video')->nullable();
            $table->string('car_image')->nullable();
            $table->string('price')->nullable();
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('higlit_id');
            $table->unsignedBigInteger('odometer_id');
            $table->unsignedBigInteger('car_models_id');
            $table->unsignedBigInteger('model_type_id');
            $table->unsignedBigInteger('engine_work_id');
            $table->unsignedBigInteger('ro_id');
            $table->unsignedBigInteger('engine_volume_id');
            $table->unsignedBigInteger('damage_id');
            $table->unsignedBigInteger('fuel_type_id');
            $table->unsignedBigInteger('transmission_id');
            $table->unsignedBigInteger('engine_type_id');
            $table->unsignedBigInteger('cylinder_id');
            $table->unsignedBigInteger('drive_id');
            $table->unsignedBigInteger('ban_id');

            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('higlit_id')->references('id')->on('higlits')->onDelete('cascade');
            $table->foreign('odometer_id')->references('id')->on('odometers')->onDelete('cascade');
            $table->foreign('car_models_id')->references('id')->on('carmodels')->onDelete('cascade');
            $table->foreign('model_type_id')->references('id')->on('model_types')->onDelete('cascade');
            $table->foreign('engine_work_id')->references('id')->on('engine_works')->onDelete('cascade');
            $table->foreign('ro_id')->references('id')->on('ros')->onDelete('cascade');
            $table->foreign('engine_volume_id')->references('id')->on('engine_volumes')->onDelete('cascade');
            $table->foreign('damage_id')->references('id')->on('damages')->onDelete('cascade');
            $table->foreign('fuel_type_id')->references('id')->on('fuel_types')->onDelete('cascade');
            $table->foreign('transmission_id')->references('id')->on('transmissions')->onDelete('cascade');
            $table->foreign('engine_type_id')->references('id')->on('engine_types')->onDelete('cascade');
            $table->foreign('cylinder_id')->references('id')->on('cylinders')->onDelete('cascade');
            $table->foreign('drive_id')->references('id')->on('drives')->onDelete('cascade');
            $table->foreign('ban_id')->references('id')->on('bans')->onDelete('cascade');
            $table->integer('a_price');
        });
        Schema::create('cars_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_id');
            $table->string('name')->nullable();
            $table->text('item_comment')->nullable();;
            $table->string('locale')->index();
            $table->unique(['car_id', 'locale']);
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars_translations');
        Schema::dropIfExists('cars');
    }
};
