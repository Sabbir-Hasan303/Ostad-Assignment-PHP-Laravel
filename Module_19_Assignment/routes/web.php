<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\PostDetailsController;
use Illuminate\Support\Facades\Route;



Route::get('/', [Homecontroller::class, 'page']);
Route::get('/postDetails/{id}', [PostDetailsController::class, 'page']);
Route::get('/test', [DemoController::class, 'DemoAccess']);

Route::get('/articleData', [Homecontroller::class, 'articleData']);
//Route::get('/articleData/{id}', [PostDetailsController::class, 'articleData']);
