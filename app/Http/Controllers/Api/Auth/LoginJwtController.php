<?php

namespace App\Http\Controllers\Api\Auth;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginJwtController extends Controller
{
    public function login(Request $request){
        $credentials = $request->all(['email', 'password']);

        if(!auth('api')->attempt($credentials)){

        }

    }
}
