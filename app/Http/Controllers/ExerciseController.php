<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\View\View;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all();

        return view('pages.exercise.index', [
            'exercises' => $exercises
        ]);
    }

    /**
     * Show the exercise information for the given exercise.
     *
     * @param int $id
     * @return Application|View
     */
    public function show(int $id)
    {
        return view('pages.exercise.show', [
            'exercise_intro' => Exercise::findOrFail($id)->exercise_intro
        ]);
    }
}
