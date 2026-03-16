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
        Schema::create('p_m_b_s', function (Blueprint $table) {
            $table->id();
            $table->string('path_register')->nullable();
            $table->string('date_register')->nullable();
            $table->string('date_test')->nullable();
            $table->string('date_result')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_m_b_s');
    }
};
