<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('hairId')->nullable();
            $table->unsignedBigInteger('bodyId')->nullable();
            $table->unsignedBigInteger('headId')->nullable();
            $table->unsignedBigInteger('eyesId')->nullable();
            $table->unsignedBigInteger('noseId')->nullable();
            $table->unsignedBigInteger('lipsId')->nullable();

            $table->foreign('hairId')->references('id')->on('assets');
            $table->foreign('bodyId')->references('id')->on('assets');
            $table->foreign('headId')->references('id')->on('assets');
            $table->foreign('eyesId')->references('id')->on('assets');
            $table->foreign('noseId')->references('id')->on('assets');
            $table->foreign('lipsId')->references('id')->on('assets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
