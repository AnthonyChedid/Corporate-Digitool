<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompetenceController;


Route::get('',[CompetenceController::class,'index']);
Route::post('',[CompetenceController::class,'store']);
Route::get('/{id}',[CompetenceController::class,'show']);
Route::put('/{id}',[CompetenceController::class,'update']);
Route::delete('/{id}',[CompetenceController::class,'destroy']);
Route::get('/search/{name}',[CompetenceController::class,'search']);


