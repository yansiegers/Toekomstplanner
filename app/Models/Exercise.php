<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    /**
     * Get the intro record associated with the exercise.
     */
    public function exercise_intro()
    {
        return $this->hasOne('App\Models\ExerciseIntro');
    }
}
