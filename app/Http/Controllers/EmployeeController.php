<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use DB;
use Image;
class EmployeeController extends Controller
{
    public function create(){
        return view('employee.create');
    }
    public function store(Request $req){
        if($req->gender){
            $gender = $req->gender;
        }
        else{
            $gender = 'NONE';
        }
        if($req->status){
            $status = 1;
        }
        else{
            $status = 0;
        }
        // echo $req->name;
        // echo $req->email;
        /* $obj = new Employee(); employees ; php artisan make:model Employee -m
        $obj->name = $req->name;
        $obj->email = $req->email;
        $obj->birth_date = $req->birth_date;
        $obj->salary = $req->salary;
        $obj->department = $req->department;
        if($req->gender){
            $gender = $req->gender;
        }
        else{
            $gender = 'NONE';
        }
        $obj->gender = $gender;
        $obj->address = $req->address;
        if($req->status){
            $status = 1;
        }
        else{
            $status = 0;
        }
        $obj->status = $status;
        if($obj->save()){
            echo 'Successfully Inserted';
        } */

        // Image
        $originalImage = $req->file('profile_pic');
        $image = Image::make($originalImage); // Image = Intervention
        $extension = $originalImage->getClientOriginalExtension();
        $name = time().'.'.$extension; // 1215212.png

        $thumbnailPath = public_path().'/thumbnail/';
        $originalPath = public_path().'/images/';

        $image->save($originalPath.$name);

        $image->resize(100,100);
        $image->save($thumbnailPath.$name);
        // Image


        DB::table('employees')->insert([
            'name' => $req->name,
            'email' => $req->name,
            'birth_date'=> $req->birth_date,
            'salary'=> $req->salary,
            'department'=> $req->department,
            'gender'=> $gender,
            'address'=> $req->address,
            'status'=> $status,
            'profile_pic'=>$name
        ]);
        echo 'Successfully Inserted';
    }
    public function all(){
        // SELECT * from employees
        $employees = Employee::all();
        return view('employee.employees', compact('employees'));
    }
    public function edit($id){
        // SELECT * from employees WHERE id=1
        $employee = Employee::find($id);
        return view('employee.edit', compact('employee'));
    }
    public function update($id, Request $req){
        $obj = Employee::find($id); 
        $obj->name = $req->name;
        $obj->email = $req->email;
        $obj->birth_date = $req->birth_date;
        $obj->salary = $req->salary;
        $obj->department = $req->department;
        if($req->gender){
            $gender = $req->gender;
        }
        else{
            $gender = 'NONE';
        }
        $obj->gender = $gender;
        $obj->address = $req->address;
        if($req->status){
            $status = 1;
        }
        else{
            $status = 0;
        }
        $obj->status = $status;
        if($obj->save()){
            return redirect('employees');
        }
    }

    public function delete($id){
        Employee::find($id)->delete();
        return redirect('/employees');
    }
}
