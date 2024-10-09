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
        Schema::create('policys', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('policys_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('policy_id');
            $table->text('agreement')->nullable();
            $table->text('rules')->nullable();
            $table->string('locale')->index();
            $table->unique(['policy_id', 'locale']);
            $table->foreign('policy_id')->references('id')->on('policys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policys_translations');
        Schema::dropIfExists('policys');
    }
};
