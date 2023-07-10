<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Newcontroller extends Controller
{
    // Question_1
    function Userinfo(Request $request):string{
        $name = $request->input('name');
        return $name;
    }


    // Question_2
    function UserAgent(Request $request):string{
        $userAgent = $request->header('User-Agent');
        return $userAgent;
    }


    // Question_3
    function Endpoint(Request $request){
        $page = $request->query('page',null);
        if($page !== null){
            return $page;
        }else{
            return;
        }
    }


    // Question_4
    function Response():JsonResponse{
        $data = array(
            "message"=> "Success",
            "data"=>array(
                "name"=> "John Doe",
                "age"=> 25
            )
        );
        return response()->json($data);
    }


    // Question_5
    function Uploadfile(Request $request):bool{
        $file=$request->file('avatar');
        $file->move(public_path('uploads'),$file->getClientOriginalName());
        return true;
    }


    // Question_6
    function Tokencookie(Request $request){
        $rememberToken = $request->cookie('remember_token',null);
        return $rememberToken;
    }
}