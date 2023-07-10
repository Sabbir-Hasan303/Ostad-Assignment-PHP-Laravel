<?php
use App\Http\Controllers\Newcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Question 1
Route::post('/userinfo',[Newcontroller::class,'Userinfo']);


// Question_2
Route::post('/useragent',[Newcontroller::class,'UserAgent']);


// Question_3
Route::get('/query',[Newcontroller::class,'Endpoint']);


// Question_4
Route::get('/response',[Newcontroller::class,'Response']);


// Question_5
Route::post('/uploadfile',[Newcontroller::class,'Uploadfile']);


// Question_6
Route::post('/tokencookie',[Newcontroller::class,'Tokencookie']);


// Question_7
Route::post('/submit',function(Request $request){
    $email = $request->input('email');
    if($email){
        return array(
            "success"=> true,
            "message"=> "Form submitted successfully."
        );
    }else{
        return "Plz enter your email.";
    }
});

