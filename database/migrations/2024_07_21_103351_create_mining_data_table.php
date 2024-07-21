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
        Schema::create('mining_data', function (Blueprint $table) {
            $table->id();
            $table->boolean('gas');
            $table->boolean('frame');
            $table->boolean('vibration');
            $table->integer('heartbeat');
            $table->integer('temperature');
            $table->integer('humidity');
            $table->string('card_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mining_data');
    }
};
