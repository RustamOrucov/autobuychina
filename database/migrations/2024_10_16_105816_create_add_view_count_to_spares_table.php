<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('spares', function (Blueprint $table) {
            $table->unsignedBigInteger('view_count')->default(0);
        });
    }

    public function down()
    {
        Schema::table('spares', function (Blueprint $table) {
            $table->dropColumn('view_count');
        });
    }
};