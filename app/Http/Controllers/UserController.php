<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login(Request $request){
        if(\Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            http_response_code(200);
            return json_encode(\Auth::user());
        }else{   
            http_response_code(401);
            return json_encode(0);
        }
    }
}
