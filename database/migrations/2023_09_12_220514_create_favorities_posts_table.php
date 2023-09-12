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
            'favorities_posts',
            function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('id_user')->nullable();
                $table->unsignedBigInteger('id_post')->nullable();
                $table->foreign('id_user')->references('id')->on('user')->onDelete('cascade');
                $table->foreign('id_post')->references('id')->on('posts')->onDelete('cascade');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorities_posts');
    }
};
