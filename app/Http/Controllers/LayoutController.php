<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function dashboard(){
        return view('admin.pages.dashboard');
    }
    public function form(){
        return view('admin.pages.forms');
    }
    public function table(){
        return view('admin.pages.tables');
    }
}
