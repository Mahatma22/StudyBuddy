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
        Schema::create('question', function (Blueprint $table) {
            $table->id('question_id');
            $table->text('question');
            $table->text('question_image')->nullable();
            $table->json('answer');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('course_id');
            $table->foreign('subject_id')->references('subject_id')->on('subject');
            $table->foreign('course_id')->references('course_id')->on('course');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question');
    }
};
