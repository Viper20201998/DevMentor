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
            'posts',
            function (Blueprint $table) {
                $table->id();
                $table->text('title');
                $table->text('img');
                $table->text('content');
                $table->unsignedBigInteger('id_user')->nullable();
                $table->foreign('id_user')->references('id')->on('user')->onDelete('cascade');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
