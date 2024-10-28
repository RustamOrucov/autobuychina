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
        Schema::table('policys', function (Blueprint $table) {
            $table->string('register_policy')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('policys', function (Blueprint $table) {
            $table->dropColumn('register_policy');
        });
    }
};
