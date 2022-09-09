<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizsetController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AllUsers;
use App\Http\Controllers\LeaderboardController;
use App\Models\Category;
use Illuminate\Http\Request;
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

Route::get('/', [HomeController::class, "index"]);

// Route::get('/', function () {
//     return view('welcome');
// });

// for subcats as cats
Route::post('subcats/{cid}', [SubcategoryController::class, 'subcats']);
// for topics as subcats
Route::post('topics/{tid}', [TopicController::class, 'topics']);

// teacherDashboard

Route::get("index", [TeacherController::class, "login"]);
Route::get("register", [TeacherController::class, "reg"]);
Route::get("forgot", [TeacherController::class, "forgetpass"]);

// student dashboard routes


//admin group
Route::middleware(['admin', 'auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::get('dashboard/allusers', [AllUsers::class, "index"])->name('allusers');
});
//student group
Route::middleware(['student', 'auth'])->group(function () {
    Route::get('/student', function () {
        return view('student.index');
    })->name('student');
});
//teacher group
Route::middleware(['teacher', 'auth'])->group(function () {
    Route::get("teacher", [TeacherController::class, "index"])->name('teacher');
});
// leaderboard
Route::get('/leaderboard/index', [LeaderboardController::class, "index"]);

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
// Quizset
Route::resource("/quizset", QuizsetController::class);
// allusers
Route::resource("/allusers", AllUsers::class);


// Route::get('fix', [QuizController::class, "fix"]);
Route::get('quiz/qz/qshow', [QuizController::class, "qshow"]);
Route::post('dynamicquiz', [QuizController::class, "dynamicquiz"]);
Route::get('playquiz', [QuizController::class, "qall"]);
Route::get('playquiz/cat/{id}', [QuizController::class, "catquiz"]);
Route::get('playquiz/subcat/{id}', [QuizController::class, "subcatquiz"]);
Route::get('playquiz/topic/{id}', [QuizController::class, "topicquiz"]);
Route::get('playquiz/qset/{id}', [QuizsetController::class, "showqset"]);

//showquiz
Route::get('/showquiz', [QuizsetController::class, "showquiz"]);
Route::post('/storequizset', [QuizsetController::class, "storeset"]);
Route::post('/storeanswer', [AnswerController::class, "storeanswer"])->name('storeanswer');
Route::post('/result', [AnswerController::class, "result"]);




// front  pages routes
Route::get('/about', function () {
    return view('inc.about');
});
Route::get('/class', function () {
    return view('inc.classes');
});
Route::get('/teachers', function () {
    return view('inc.teacher');
});
Route::get('/leaderboard', function () {
    return view('inc.leaderboard');
});
Route::get('/contact', function () {
    return view('inc.contact');
});

// storage:link
Route::get('/link', function () {
    Artisan::call('storage:link');
    return back();
});


// keet it at the bottom
require __DIR__ . '/auth.php';
