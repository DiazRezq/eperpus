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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('user_id');
            $table->string('isbn')->unique();
            $table->string('author');
            $table->integer('published_year');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('publisher_id');
            $table->string('cover_image')->nullable();
            $table->string('description')->nullable();
            $table->integer('stock');
            $table->integer('rental_price');
            $table->timestamps();
            $table->softDeletes();
            $table->engine('innoDB');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
