<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('quizId')->nullable();
            $table->unsignedBigInteger('seatWorkId')->nullable();
            $table->unsignedBigInteger('studId');
            $table->string('dateTaken');
            $table->enum('status',['not done','done','passed','failed']);
            $table->string('duration');
            $table->string('dueDate');
            $table->integer('totalPoints');
            $table->timestamps();

            $table->foreign('studId')->references('id')->on('students');
            $table->foreign('quizId')->references('id')->on('quizes');
            $table->foreign('seatWorkId')->references('id')->on('seatworks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_activities');
    }
}
