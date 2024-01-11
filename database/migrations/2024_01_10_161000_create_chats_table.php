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
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->foreignId("from-users_id")->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("to-users_id")->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("transaction_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            // $table->foreignId("to-users_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("message");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
