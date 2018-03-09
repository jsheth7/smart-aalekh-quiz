<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateSelectionsTable
 * One selection has one question
 * One selection has one answer
 */
class CreateSelectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selections', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('attempt_id')->unsigned()->nullable();
            $table->foreign('attempt_id')->references('id')->on('attempts');

            $table->integer('answer_id')->unsigned()->nullable();
            $table->foreign('answer_id')->references('id')->on('answers');

            $table->integer('question_id')->unsigned()->nullable();
            $table->foreign('question_id')->references('id')->on('questions');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selections');
    }

}
