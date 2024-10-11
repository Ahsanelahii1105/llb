<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dateTime('appointment_date')->nullable();  // Column to store both date and time
        });
    }

    public function down()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropColumn('appointment_date');  // Rollback the column
        });
    }

};
