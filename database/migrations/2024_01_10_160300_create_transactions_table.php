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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customers_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('consultant_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('option');
            $table->string('total_sessions');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};