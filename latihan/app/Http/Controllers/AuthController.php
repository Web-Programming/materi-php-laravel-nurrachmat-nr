<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    function login(){
        return view("login");
    }

    function do_login(Request $request){
        
    }

    function register(){
        return view("register");
    }

    function do_register(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8'
            ]
        );
        if($validator->fails()){
            return redirect("register")
            ->withErrors($validator)
            ->withInput();    
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = 'user';
        $user->save();

        return redirect('login');
    }

}
