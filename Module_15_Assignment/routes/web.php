<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;

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

Route::get('/',function(){
    return view('page.welcome');
});
Route::get('/signup',function(){
    return view('page.signup');
});
Route::post('/register',[RegisterController::class,'ValidateAndRegister']);



//answer-2 

Route::get('/dashboard', function () {
    return view('page.dashboard');
});

Route::get('/home', function () {
    return redirect('/dashboard', 302);
});


//answer-4
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        //
    });

    Route::get('/settings', function () {
        //
    });
});


Route::get('/contact',function(){
 return view('page.contact');
});
Route::post('/sendmail', ContactController::class);