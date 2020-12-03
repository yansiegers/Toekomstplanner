<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ExerciseAssignmentController extends Controller
{
    public function index($exercise_id)
    {
        $exercise_assignments = DB::table('exercise_results')->where('exercise_id', $exercise_id)->get();

        return view('private.exercise.assignment.index', [
            'exercise_id' => $exercise_id,
            'exercise_assignments' => $exercise_assignments
        ]);
    }

    public function show($exercise_id, $id)
    {
        $exercise_assignment = DB::table('exercise_results')->find($id);

        return view('private.exercise.assignment.show', [
            'exercise_id' => $exercise_id,
            'exercise_assignment' => $exercise_assignment
        ]);
    }
}
