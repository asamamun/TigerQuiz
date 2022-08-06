<?php

use App\Http\Controllers\teacherController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('welcome');
});

// admin dashboard routes
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

// teacherDashboard
Route::get("teacher", [teacherController::class,"index"])->middleware(['auth'])->name('teacher');
Route::get("index", [teacherController::class,"login"]);
Route::get("register", [teacherController::class,"reg"]);
Route::get("forgot", [teacherController::class,"forgetpass"]);

// student dashboard routes
Route::get('/student', function () {
    return view('student.index');
})->middleware(['auth'])->name('student');


// main pages routes
Route::get('/about', function() { return view('inc.about');});
Route::get('/class', function() {return view('inc.classes');});
Route::get('/teachers', function() {return view('inc.teacher');});
Route::get('/leaderboard', function() {return view('inc.leaderboard');});
Route::get('/contact', function() { return view('inc.contact');});


// keet it at the bottom
require __DIR__.'/auth.php';
