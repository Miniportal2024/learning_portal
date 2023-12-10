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
            $table->text('description');
            $table->string('state');
            $table->string('duration')->nullable();
            $table->string('course_img')->nullable();
            $table->string('author')->nullable();
            $table->string('author_img')->nullable();
            $table->string('author_profile')->nullable();
            $table->Integer('rating')->nullable();
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
