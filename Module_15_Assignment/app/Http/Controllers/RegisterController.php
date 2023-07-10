<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //answer-1
    
    public function ValidateAndRegister(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|min:2',
                'email' => 'required|email',
                'password' => 'required|string|min:8'
            ]
        );
        return back()->withSuccess('Register Success !!');
    }
}
