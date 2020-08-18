<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('studId')->nullable();
            $table->unsignedBigInteger('teacherId')->nullable();
            $table->string('name',255);
            $table->string('duration',255);
            $table->unsignedBigInteger('quizId')->nullable();
            
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('studId')->references('id')->on('students');
            $table->foreign('teacherId')->references('id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
