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
        Schema::create('consultant_infos', function (Blueprint $table) {
            $table->id();
            $table->text('bio');
            $table->text('case');
            $table->integer('price_online');
            $table->integer('price_meet');
            $table->string('degree');
            $table->string('expert_in');
            $table->integer('sessions');
            $table->integer('helped');
            $table->string('status');
            $table->foreignId('consultant_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultant_infos');
    }
};
