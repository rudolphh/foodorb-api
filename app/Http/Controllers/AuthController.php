<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if($validation->fails())
        {
            $errors = $validation->errors();
            return response()->json([
                "status"=> "fail",
                "message" =>  $errors
            ], 400); 
        } 
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $user->generateToken();
    
        return response()->json(['data' => $user->toArray()], 201);
    }

    public function login(Request $request)
    {
        return User::create($request->all());
    }

    public function forgotpassword(Request $request)
    {
        return User::create($request->all());
    }
}
