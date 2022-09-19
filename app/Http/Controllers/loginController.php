<?php

namespace App\Http\Controllers;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class loginController extends Controller
{
    public function login(Request $request)
    {
        if(!Auth::attempt($request->only('email','password'))){
            throw new AuthenticationException();
        }
    }
    public function register(Request $request)
    {
        $user = new User; 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}
