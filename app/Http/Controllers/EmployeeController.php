<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Role;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //insert data
    public function store(Request $request){
        //this func runs when we submit form and store() saves data nto db

    $request->validate([
        'name' => 'required',
        'email' => 'nullable|email',
        'age' => 'required|integer',
        'roles' => 'required|array|max:2',
        'roles.*' => 'exists:roles,id'
    ]);

        Employee::create([
            // db insert
            //get data from input
                'role_id'=>$request->input('role_id',1),
            'name'=>$request->name,
            'age'=>$request->age,
            'email'=>$request->email
        ]);
        return redirect()->route('employees.index');
    }
    //get all data
    public function index(){
        $employees=Employee::all();
        $roles=Role::all();
        return view('employees.index',compact('employees','roles'));
    }
    public function create(){
         $employees=Employee::all();
        $roles=Role::all();
        return view('employees.create',compact('employees','roles'));
        //if the field is empty then it will create error
    }
    public function edit($id){
        $employee=Employee::findorFail($id);
        $roles=Role::all();
        return view('employees.edit',compact('employee','roles'));
    }
    public function update(Request $request,$id){
        $employee=Employee::findOrFail($id);
        $employee->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'role_id'=>$request->role_id

        ]);
        return redirect()->route('employees.index');


    }
   
}
