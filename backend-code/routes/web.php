<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamUserController;
use App\Http\Controllers\AssignedChallengeController;


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

Route::get('/api/1', function () {
    return [1, 2, 3];
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('/tasks/view/{id}', 'App\Http\Controllers\TaskController@showTasksOfChallenge');
    Route::post('/tasks/create/{id}', 'App\Http\Controllers\TaskController@addTaskToChallenge');

    Route::post('/challenges/assignAChallenge', 'App\Http\Controllers\AssignedChallengeController@assignUserToChallenge')->name('challenges.assignAChallenge');
    Route::post('/teams/addTeamMember', 'App\Http\Controllers\TeamUserController@addTeamMember')->name('teams.addTeamMember');

});
