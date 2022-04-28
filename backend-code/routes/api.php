<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AssignedChallengeController;


use App\Http\Controllers\TeamController;
use App\Http\Controllers\CompetenceController;
// use App\Http\Controllers\UserController;


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
Route::prefix('/teams')->group(__DIR__.'/api/teamRoutes.php');
Route::prefix('/competences')->group(__DIR__.'/api/competenceRoutes.php');
// Route::prefix('/users')->group(__DIR__.'/api/userRoutes.php');

//Auth
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register', 'App\Http\Controllers\AuthController@register');
Route::post('login', 'App\Http\Controllers\AuthController@login');
Route::post('logout', 'App\Http\Controllers\AuthController@logout')->middleware('auth:sanctum');

Route::get('/getnewchallenges/{id}','App\Http\Controllers\AssignedChallengeController@getNewChallenges')->middleware('auth:sanctum');
Route::get('/getpreviouschallenges/{id}','App\Http\Controllers\AssignedChallengeController@getPreviousChallenges')->middleware('auth:sanctum');
Route::patch('/challengefinished/{id}','App\Http\Controllers\AssignedChallengeController@finishChallenge')->middleware('auth:sanctum');

Route::get('/gettasks/{id}','App\Http\Controllers\AssignedTaskController@getTasks')->middleware('auth:sanctum');
Route::patch('task','App\Http\Controllers\AssignedTaskController@answerTask')->middleware('auth:sanctum');
Route::get('/getresulttasks/{id}','App\Http\Controllers\AssignedTaskController@getResultTasks')->middleware('auth:sanctum');
