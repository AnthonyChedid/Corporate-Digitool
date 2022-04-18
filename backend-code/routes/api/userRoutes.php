<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeamController;

Route::get('',[TeamController::class,'index']);
Route::get('/{id}',[TeamController::class,'show']);

