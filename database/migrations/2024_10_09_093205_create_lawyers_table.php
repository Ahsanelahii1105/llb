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
        Schema::create('lawyers', function (Blueprint $table) {
            $table->id();
            $table->string('lawyer_name');
            $table->string('lawyer_email');
            $table->bigInteger('lawyer_phone');
            $table->string('lawyer_address');
            $table->string('lawyer_qualification');
            $table->string('lawyer_category');
            $table->string('lawyer_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawyers');
    }
};
