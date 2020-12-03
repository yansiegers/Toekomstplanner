<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\ExerciseResultController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'show'])->defaults('id', 1)->name('home');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::resource('oefeningen', ExerciseController::class)->only([
    'index', 'show'
]);

Route::resource('oefeningen.invullen', ExerciseResultController::class);

//<a href="{{ action('App\Http\Controllers\ProjectController@show', [$project->id]) }}">
//    {{ $project->title }}
//</a>

