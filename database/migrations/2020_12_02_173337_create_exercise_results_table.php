<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExerciseResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_results', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->nullable($value = false);
            $table->foreignId('exercise_id')->nullable($value = false);
            $table->string('question')->nullable($value = false);
            $table->text('answer')->nullable($value = false);
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
        Schema::dropIfExists('exercise_results');
    }
}
