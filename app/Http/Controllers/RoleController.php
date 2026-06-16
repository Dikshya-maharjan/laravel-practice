<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Role;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $roles=Role::all();
        return view('employees.create',compact('roles'));
    }
    public function create(){
        return view('roles.create');
    }
     public function store(Request $request)
    {
        Role::create($request->all());
        return redirect()->route('roles.index');
    }
}
