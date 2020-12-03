<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ExerciseAssignmentController extends Controller
{
    public function index($exercise_id)
    {
//        $exercise_results = ExerciseResult::all()->where('exercise', $exercise_id);
        $exercise_results = DB::table('exercise_results')->where('exercise_id', $exercise_id)->get();

        return view('private.exercise_results.index', [
            'exercise_results' => $exercise_results
        ]);
    }

//    /**
//     * Show the exercise information for the given exercise.
//     *
//     * @param int $id
//     * @return Application|View
//     */
//    public function show(int $id)
//    {
//        return view('private.exercise_results.show', [
//            'exercise_intro' => Exercise::findOrFail($id)->exercise_intro
//        ]);
//    }
}
