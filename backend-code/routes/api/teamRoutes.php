<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeamController;

// Route::resource('teams',TeamController::class);
Route::get('',[TeamController::class,'index']);
Route::post('',[TeamController::class,'store']);
Route::get('/{id}',[TeamController::class,'show']);
Route::put('/{id}',[TeamController::class,'update']);
Route::delete('/{id}',[TeamController::class,'destroy']);
Route::get('/search/{name}',[TeamController::class,'search']);
