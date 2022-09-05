<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaderboards', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            // $table->bigInteger('quiz_id')->unsigned()->nullable();
            // $table->foreign('quiz_id')->references('id')->on('quizzes');
            $table->bigInteger('quizset_id')->unsigned()->nullable();
            $table->foreign('quizset_id')->references('id')->on('quizsets');
            $table->string('given_ans');
            $table->string('submitted_at')->nullable();
            $table->bigInteger('marks');
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
        Schema::dropIfExists('leaderboards');
    }
};
