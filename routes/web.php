<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AllUsers;
use Illuminate\Support\Facades\Artisan;

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

    Route::get('dashboard/allusers', [AllUsers::class,"index"])->name('allusers');

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


// profile route
Route::resource("profile", ProfileController::class);

 // category
 Route::resource("/category", CategoryController::class);

 // subcategory
 Route::resource("/subcategory", SubcategoryController::class);

 // Topic
 Route::resource("/topic", TopicController::class);
 // Quiz
 Route::resource("/quiz", QuizController::class);
 // allusers
 Route::resource("/allusers", AllUsers::class);



// front  pages routes
Route::get('/about', function() { return view('inc.about');});
Route::get('/class', function() {return view('inc.classes');});
Route::get('/teachers', function() {return view('inc.teacher');});
Route::get('/leaderboard', function() {return view('inc.leaderboard');});
Route::get('/contact', function() { return view('inc.contact');});

// storage:link
Route::get('/link', function () { Artisan::call('storage:link'); return back(); });


// keet it at the bottom
require __DIR__.'/auth.php';
