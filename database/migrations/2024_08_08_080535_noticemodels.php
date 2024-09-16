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
        Schema::create('noticemodels', function (Blueprint $table) {
            $table->id();
            $table->string('category')->default('about');
            $table->timestamps();
        });

        Schema::create('noticemodels_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notice_model_id');
            $table->text('title')->nullable();
            $table->string('header')->nullable();
            $table->longText('content')->nullable();
            $table->string('locale')->index();
            $table->unique(['notice_model_id', 'locale']);
            $table->foreign('notice_model_id')->references('id')->on('noticemodels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticemodels_translations');
        Schema::dropIfExists('noticemodels');
    }
};
