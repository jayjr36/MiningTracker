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
        Schema::create('mining_trackings', function (Blueprint $table) {
            $table->id();
            $table->float('gas_value')->nullable();
            $table->integer('heartrate')->nullable();
            $table->boolean('flame_detection')->nullable();
            $table->boolean('vibration_detection')->nullable();
            $table->float('temperature')->nullable();
            $table->float('humidity')->nullable();
            $table->string('location')->nullable();
            $table->boolean('emergency_button')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mining_trackings');
    }
};
