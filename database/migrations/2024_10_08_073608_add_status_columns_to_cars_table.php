<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->boolean('crashed')->default(0);
            $table->boolean('painted')->default(0);
            $table->boolean('for_spare_parts')->default(0);
        });
    }

    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('crashed');
            $table->dropColumn('painted');
            $table->dropColumn('for_spare_parts');
        });
    }
};
