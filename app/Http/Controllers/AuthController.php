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

    }
    public function login(){
        return view('admin.pages.login');
    }
    public function userLogin(Request $req){

    }
}
