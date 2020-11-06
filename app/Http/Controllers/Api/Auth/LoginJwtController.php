<?php

namespace App\Http\Controllers\Api\Auth;

use App\Api\ApiMessages;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginJwtController extends Controller
{
    public function login(Request $request){
        $credentials = $request->all(['email', 'password']);

        if(!$token = Auth::attempt($credentials)){
            $message = new ApiMessages('Unauthorized');
			return response()->json($message->getMessage(), 401);
        }

        return response()->json([
            'token'=> $token
        ]);
    }

    public function logout(){
        Auth::logout();

        return response()->json(['message'=> 'logout feito com sucesso.']);
    }
}
