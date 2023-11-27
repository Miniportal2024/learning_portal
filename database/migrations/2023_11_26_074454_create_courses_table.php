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
        Schema::create('courses', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('name');
            $table->text('overview');
            $table->text('description');
            $table->boolean('state');
            $table->integer('number_of_videos')->nullable();
            $table->integer('number_of_files')->nullable();
            $table->string('duration')->nullable();
            $table->string('instructor')->nullable();
            $table->string('img');
            $table->string('file')->nullable();
            $table->string('rating')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
