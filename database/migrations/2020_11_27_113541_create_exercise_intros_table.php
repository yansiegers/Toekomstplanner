<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExerciseIntrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_intros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exercise_id')->nullable($value = false);
            $table->string('title')->nullable($value = false);
            $table->text('text')->nullable($value = false);
            $table->enum('category', ['future', 'school', 'work', 'personal', 'social']);
            $table->integer('duration');
            $table->enum('difficulty', ['easy', 'medium', 'hard']);
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
        Schema::dropIfExists('exercise_intros');
    }
}
