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
        Schema::create('experts', function (Blueprint $table) {
            $table->string('E_ID')->primary();
            $table->string('E_Name');
            $table->string('E_Email');
            $table->string('E_Gender');
            $table->string('E_Address');
            $table->string('E_Password');
            $table->string('E_PhoneNum');
            $table->string('E_University');
            $table->string('E_Publication');
            $table->string('E_Paper');
            $table->string('E_Topic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experts');
    }
};
