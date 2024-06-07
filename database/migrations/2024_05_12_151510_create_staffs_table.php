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
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('s_ic')->nullable();;
            $table->string('s_gender')->nullable();;
            $table->string('s_religion')->nullable();;
            $table->string('s_race')->nullable();;
            $table->string('s_citizenship')->nullable();;
            $table->string('s_address')->nullable();;
            $table->string('s_hp_no')->nullable();;
            $table->string('s_department')->nullable();;
            $table->string('s_position')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staffs');
    }
};
