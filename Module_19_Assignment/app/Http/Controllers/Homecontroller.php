<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    function page(Request $request){
        return view('pages.home');
    }

    function articleData(Request $request){
        $result = Articles::get();
        return $result;
    }
}
