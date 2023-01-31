<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegistration extends Controller
{
    public function index()
    {
        return view('registration');
    }
    public function user_registration(Request $req)
    {
        $req->validate
        (
            [
               'name'=>'required',
               'email'=>'required|email',
               'password'=>'required',
               'confirm_password'=>'required|same:password',
               
            ]
            );
        echo "<pre>";
       print_r($req->all());
    }
}



