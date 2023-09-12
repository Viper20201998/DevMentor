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
        Schema::create(
            'users',
            function (Blueprint $table) {
                $table->id();
                $table->string('username', 10);
                $table->unsignedBigInteger('id_rol')->nullable();
                $table->unsignedBigInteger('id_state')->nullable();
                $table->foreign('id_rol')->references('id')->on('role')->onDelete('cascade');
                $table->foreign('id_state')->references('id')->on('states')->onDelete('cascade');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
