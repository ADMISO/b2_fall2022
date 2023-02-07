<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
    public function register(){
        return view('admin.pages.register');
    }
    public function userRegister(Request $req){
        $name = $req->name;
        $email = $req->email;
        $password = $req->password;
        $confirm = $req->cnf_password;
        $role = $req->role;
        if($password == $confirm){
            $user_exists = User::where('email','=',$email)->first();
            if($user_exists){
                return redirect()->back()->with('info', 'User Already Exists');
            }
            else{
                $user = new User();
                $user->name = $name;
                $user->email = $email;
                $user->password = md5($password); // 123456
                $user->role = $role;
                if($user->save()){
                    return redirect()->back()->with('info', 'User registered. Waiting for approval');
                }
            }
        }
        else{
            return redirect()->back()->with('info', 'Password Mismatch');
        }
    }
    public function login(){
        return view('admin.pages.login');
    }
    public function userLogin(Request $req){

    }
}
