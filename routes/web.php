<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'show'])->defaults('view', 'home');
//Route::get('/dasboard', [PageController::class, 'show'])->defaults('view', 'dashboard');

//Route::get('/', function () {
//    return view('pages.home');
//})->name('home');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');


Route::resource('exercises', ExerciseController::class)->only([
    'index', 'show'
]);

