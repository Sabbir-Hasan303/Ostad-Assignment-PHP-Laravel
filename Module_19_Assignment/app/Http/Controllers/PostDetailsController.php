<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Users;
use Illuminate\Http\Request;
use function Ramsey\Uuid\v1;

class PostDetailsController extends Controller
{
    function page(Request $request, $id){
        $result = Articles::where('articles.id',$id)->get();
        return view('pages.postDetails', compact('result'));
    }

//    function articleData(Request $request, $id){
//        $result = Articles::where('articles.id',$id)->get();
//        return $result;
//    }

    function userDetails(Request $request){
        $result = Users::get();
        return $result;
    }
}
