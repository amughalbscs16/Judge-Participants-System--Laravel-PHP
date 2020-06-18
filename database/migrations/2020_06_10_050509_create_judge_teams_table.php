<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJudgeTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judge_teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team_id');
            $table->integer('judge_id');
            $table->unique(['team_id', 'judge_id']);
            $table->integer('Q1')->nullable();
            $table->string('comments_q1')->nullable();
            $table->integer('Q2')->nullable();
            $table->string('comments_q2')->nullable();
            $table->integer('Q3')->nullable();
            $table->string('comments_q3')->nullable();
            $table->integer('Q4')->nullable();
            $table->string('comments_q4')->nullable();
            $table->integer('Q5')->nullable();
            $table->string('comments_q5')->nullable();
            $table->integer('Q6')->nullable();
            $table->string('comments_q6')->nullable();
            $table->string('assessment')->nullable();
            $table->integer('total_score')->nullable();
            $table->string('check')->default('No');
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
        Schema::dropIfExists('judge_teams');
    }
}
