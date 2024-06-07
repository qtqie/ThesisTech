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
        Schema::create('mentors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('m_ic')->nullable();;
            $table->string('m_gender')->nullable();;
            $table->string('m_religion')->nullable();;
            $table->string('m_race')->nullable();;
            $table->string('m_citizenship')->nullable();;
            $table->string('m_address')->nullable();;
            $table->string('m_hp_no')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentors');
    }
};
