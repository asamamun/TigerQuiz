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


// teacherDashboard

Route::get("index", [TeacherController::class,"login"]);
Route::get("register", [TeacherController::class,"reg"]);
Route::get("forgot", [TeacherController::class,"forgetpass"]);

// student dashboard routes


//admin group
Route::middleware(['admin','auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

});
//student group
Route::middleware(['student','auth'])->group(function () {
    Route::get('/student', function () {
        return view('student.index');
    })->name('student');

});
//teacher group
Route::middleware(['teacher','auth'])->group(function () {
    Route::get("teacher", [TeacherController::class,"index"])->name('teacher');
    
});




// main pages routes
Route::get('/about', function() { return view('inc.about');});
Route::get('/class', function() {return view('inc.classes');});
Route::get('/teachers', function() {return view('inc.teacher');});
Route::get('/leaderboard', function() {return view('inc.leaderboard');});
Route::get('/contact', function() { return view('inc.contact');});


// keet it at the bottom
require __DIR__.'/auth.php';
