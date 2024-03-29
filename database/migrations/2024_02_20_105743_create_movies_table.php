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
        Schema::disableForeignKeyConstraints();
        Schema::create('movies', function (Blueprint $table) {
            
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->foreignId('genre_id')->constrained()->nullable();
            $table->string('actors')->nullable(); 
            $table->string('producer')->nullable(); 
            $table->string('running_time')->nullable(); 
            $table->string('image')->nullable(); 
            $table->string('publication_date');
            $table->integer('rating')->nullable();
            $table->string('quality')->nullable();
            $table->string('slug')->unique()->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
