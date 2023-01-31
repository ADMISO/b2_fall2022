<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function about(){
        $name = 'Anik Sen';
        $phone = '01819123456';
        $email = 'anik@gmail.com';
        // return view('about', ['name'=>$name, 'email'=>$email, 'phone'=>$phone]);
        return view('about', compact('name', 'email', 'phone'));
    }
    public function service($running){
        $services = [
            array('name'=>'Web Development', 'price'=>10000),
            array('name'=>'Graphics Design', 'price'=>20000),
            array('name'=> 'SEO', 'price'=>5000)
        ];
        return view('service', compact('services', 'running'));
    }
    public function business($x, $y){
        return view('business', compact('x', 'y'));
    }
}
