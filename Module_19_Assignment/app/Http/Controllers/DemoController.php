<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAccess(Request $request)
    {
        $result = Users::get();
        return $result;
    }
}
