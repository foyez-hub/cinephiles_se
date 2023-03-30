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
        Schema::create('movieinfos', function (Blueprint $table) {
            $table->string('movie_name');
            $table->string('release_year');
            $table->string('genres');
            $table->string('synopsis');
            $table->string('category');
            $table->string('image');
            $table->string('video');
            $table->string('movie_clip');
        });
    }

 
    public function down(): void
    {
        Schema::dropIfExists('movieinfos');
    }
};
