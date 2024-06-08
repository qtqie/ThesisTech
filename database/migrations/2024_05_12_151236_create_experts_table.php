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
        $table->id()->autoIncrement(); // Auto-increment integer
        $table->string('E_Name', 255);
        $table->string('E_Email', 255);
        $table->string('E_Gender');
        $table->string('E_Address');
        $table->string('E_PhoneNum');
        $table->string('E_University', 255);
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
