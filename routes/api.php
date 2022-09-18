<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\subcategoryController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AnswerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("questions", [QuizController::class, "randomquestions"]);

Route::get("categories", [CategoryController::class, "apicat"]);
Route::get("subcategories/{cid}", [CategoryController::class, "apisubcat"]);
Route::get("topic/{scid}", [CategoryController::class, "apitopic"]);
Route::get("questions/{cid}/{scid}/{tid}", [QuizController::class, "loadquestions"]);
// all quizzes
Route::get("catquiz/{id}", [QuizController::class, "apicatquiz"]);

Route::post("answers", [AnswerController::class, "apianswers"]);
// Route::get("questions/cat/{id}", [QuizController::class, "catrandomquestions"]);
// Route::get("questions", [QuizController::class, "randomquestions"]);
Route::post("addquestion",[QuizController::class, "apiaddquiz"]);