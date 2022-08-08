<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class,"index"]);

// Route::get('/', function () {
//     return view('welcome');
// });

// admin dashboard routes
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

// teacherDashboard
Route::get("teacher", [TeacherController::class,"index"])->middleware(['auth'])->name('teacher');
Route::get("index", [TeacherController::class,"login"]);
Route::get("register", [TeacherController::class,"reg"]);
Route::get("forgot", [TeacherController::class,"forgetpass"]);

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
