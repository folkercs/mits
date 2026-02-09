<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
     public function regist(Request $req)
    {
        $valid = $req->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $result = UserService::create($valid);

        if (isset($result['error']) && $result['error']=='Email already exists')
            return response()->json($result,400);    

        return response()->json($result,201);
    }

         public function auth(Request $req)
    {
        $valid = $req->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $result = UserService::auth($valid);

        if (isset($result['error']) && $result['error']=='Invalid email or password')
            return response()->json($result,401);    

        return response()->json($result,200);
    }
}


