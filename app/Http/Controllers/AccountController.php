<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class AccountController extends Controller
{
    //
    public function store(Request $request){
        $formRegisterFiled = $request->validate([
            'username' => ['required' , 'min:4' , Rule::unique('users' , 'username')],
            'fullname' => ['required' , 'min:4'],
            'email'=> ['required' , 'email' , Rule::unique('users' , 'email')],
            'password'=> ['required' , 'min:6']
        ]);
        $formRegisterFiled['password'] = bcrypt($formRegisterFiled['password']);

        //Create User
        $user = User::create($formRegisterFiled);

        //Login
        auth() -> login($user);

        return redirect('/') ->with('message' , 'User created successfully');
    }

    public function logout(Request $request){
        auth()->logout();

        $request -> session() -> invalidate();
        $request -> session() -> regenerateToken();

        return redirect('/') -> with('message' , 'Loggingout successfully !');
    }

    public function login(Request $request){
        $loginForm = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
         // Debugging statement
        if(auth() -> attempt($loginForm)){
            $request -> session() -> regenerate();
            return redirect('/') -> with('message' , 'Log in successfully !');
        }
        else{
        return back()->with('message','Login failed');
        }
    }
    
}
