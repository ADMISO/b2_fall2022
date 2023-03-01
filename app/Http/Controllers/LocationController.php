<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;
class LocationController extends Controller
{
    public function location(){
        $divisions = Division::all();
        return view('location',compact('divisions'));
    }
}
