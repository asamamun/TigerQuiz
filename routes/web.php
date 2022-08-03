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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



// teacherDashboard
Route::get("tdashboard", [teacherController::class,"index"]);
Route::get("index", [teacherController::class,"login"]);
Route::get("register", [teacherController::class,"reg"]);
Route::get("forgot", [teacherController::class,"forgetpass"]);

Route::get('/student_dashboard', function () {
    return view('student_dashboard.index');
})->middleware(['auth'])->name('student_dashboard');

require __DIR__.'/auth.php';
