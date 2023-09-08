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
            $table->engine="InnoDB";
            $table->id();
            $table->string('title', 100);
            $table->string('author', 100);
            $table->string('condition', 100);
            $table->boolean('status');
            $table->string('image_path');
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete("cascade");
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
