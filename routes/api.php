<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlaceController;




Route::post('/signup', [AuthController::class, 'signup']);


Route::post('/login', [AuthController::class, 'login']);

Route::get('/places', [PlaceController::class, 'index']);
