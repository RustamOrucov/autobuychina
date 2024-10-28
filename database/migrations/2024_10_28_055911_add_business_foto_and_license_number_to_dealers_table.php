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
        Schema::table('dealers', function (Blueprint $table) {
            $table->string('business_foto')->nullable();
            $table->string('license_number')->nullable();
        });
    }

    public function down()
    {
        Schema::table('dealers', function (Blueprint $table) {
            $table->dropColumn('business_foto');
            $table->dropColumn('license_number');
        });
    }

};
