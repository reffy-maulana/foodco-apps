<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Str;
use Hash;
use Auth;

class AuthController extends Controller
{
    public function registration()
    {
        return view('registration');
    }
    public function registration_post(Request $request)
    {
        $user = request()->validate([
            'name' => 'required',
            'password' => 'required|min:6'
        ]);

        $user  = new User;
        $user->name = trim($request->name);
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(50);
        $user->save();

        return redirect('login')->with('success', 'Register Success');
    }
    public function login_post(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password], true)) 
        {
            return redirect('admin')->with('success', 'Login Success');
        }
    }

    public function login(){
        return view('login');
    }
}
