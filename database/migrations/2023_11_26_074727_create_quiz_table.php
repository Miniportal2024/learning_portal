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
        Schema::create('quiz', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('title');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('after_video_id');
            $table->integer('quiz_item');
            $table->string('question');
            $table->string('option1');
            $table->string('option2');
            $table->string('option3');
            $table->string('option4');
            $table->string('answer');
            $table->string('explanation')->nullable();

            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('after_video_id')->references('id')->on('videos')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('quiz_score', function (Blueprint $table) {
            $table->primary(['user_id', 'quiz_id']);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('quiz_id');
            $table->integer('score');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('quiz_id')
                ->references('id')
                ->on('quiz')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_score');
        Schema::dropIfExists('quiz');
    }
};
