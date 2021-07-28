<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getRegistration()
    {
        return view('register');
    }
    public function postRegistration(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|max:255',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4',
        ]);

        $user = new User([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),

        ]);
        $user->save();
        return redirect()->route('movies.index');
    }
    public function getLogin()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4',
        ]);

if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
        return redirect()->route('movies.index');
}
return redirect()->back();
    }
}