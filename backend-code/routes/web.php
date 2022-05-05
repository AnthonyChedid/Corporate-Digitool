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

    Route::get('/tasks/view/{id}', 'App\Http\Controllers\TaskController@showTasksOfChallenge')->name('tasks.showTasks');
    Route::get('/tasks/create/{id}', 'App\Http\Controllers\TaskController@addTaskToChallenge')->name('tasks.addATask');
    Route::post('/tasks/submit/{id}', 'App\Http\Controllers\TaskController@submitTaskToChallenge')->name('tasks.submitTask');
    Route::get('/tasks/delete/{id}', 'App\Http\Controllers\TaskController@deleteTask')->name('tasks.deleteTask');

    Route::post('/challenges/assignAChallenge', 'App\Http\Controllers\AssignedChallengeController@assignUserToChallenge')->name('challenges.assignAChallenge');
    Route::post('/challenges/assignAChallengeToTeam', 'App\Http\Controllers\AssignedChallengeController@assignTeamToChallenge')->name('challenges.assignTeamToChallenge');
    Route::post('/teams/addTeamMember', 'App\Http\Controllers\TeamUserController@addTeamMember')->name('teams.addTeamMember');

});
