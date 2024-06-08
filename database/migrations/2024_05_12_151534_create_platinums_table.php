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
        Schema::create('platinums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('p_ic')->nullable();;
            $table->string('p_gender')->nullable();;
            $table->string('p_religion')->nullable();;
            $table->string('p_race')->nullable();;
            $table->string('p_citizenship')->nullable();;
            $table->text('p_address')->nullable();;
            $table->string('p_hp_no')->nullable();;
            $table->string('p_fb_name')->nullable();;
            $table->string('p_edu_information')->nullable();;
            $table->string('p_pakej')->nullable();;
            $table->string('p_batch_no')->nullable();;
            $table->string('p_cluster_of_study')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platinums');
    }
};
