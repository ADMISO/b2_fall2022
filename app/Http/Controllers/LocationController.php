<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\District;
class LocationController extends Controller
{
    public function location(){
        $divisions = Division::all();
        return view('location',compact('divisions'));
    }
    public function getDistrictsByDivisionId($division_id){
        $districts = District::where('division_id','=',$division_id)
                            ->select('id','name')
                            ->get();
        return response()->json([
            'districts' => $districts 
        ]);
    }
}
