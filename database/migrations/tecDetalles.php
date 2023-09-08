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
            'detail',
            function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('id_post')->nullable();
                $table->unsignedBigInteger('id_tect')->nullable();
                $table->foreign('id_post')->references('id')->on('post')->onDelete('cascade');
                $table->foreign('id_tect')->references('id')->on('tech')->onDelete('cascade');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
