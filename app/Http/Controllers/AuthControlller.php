<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthControlller extends Controller
{

    public function register_form()
    {
        return view('register_form');
    }

    public function login_form()
    {
        return view('login_form');
    }
    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email =$request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return 'user is registered';
    }

    public function login(Request $request)
    {
        $credentials = request(['email', 'password']);
        if (Auth::guard('web')->attempt($credentials)) {
            return 'you are logged in';
        }
        else{
            return 'you are not logged in';
        }
    }
}
