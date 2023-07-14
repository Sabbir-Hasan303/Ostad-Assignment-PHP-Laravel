<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\PostDetailsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Homecontroller::class, 'page']);
Route::get('/postDetails/{id}', [PostDetailsController::class, 'page']);
Route::get('/test', [DemoController::class, 'DemoAccess']);

Route::get('/articleData', [Homecontroller::class, 'articleData']);
//Route::get('/articleData/{id}', [PostDetailsController::class, 'articleData']);
