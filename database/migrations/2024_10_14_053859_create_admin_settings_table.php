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
        Schema::create('admin_settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_name');
            $table->string('phone');
            $table->string('design_name');
            $table->timestamps();
        });
        Schema::create('admin_settings_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_setting_id');
            $table->string('mobile_footer');
            $table->string('footer_text');
            $table->string('mobile_copyright');
            $table->string('locale')->index();
            $table->unique(['admin_setting_id', 'locale']);
            $table->foreign('admin_setting_id')->references('id')->on('admin_settings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_settings_translations');
        Schema::dropIfExists('admin_settings');
    }
};
