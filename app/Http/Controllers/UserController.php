<?php

namespace App\Http\Controllers;

use App\Models\AuthUser;

class UserController extends Controller
{
    public function index()
    {
        $users = AuthUser::all();
        return view('users.users', compact('users'));
    }
    public function firstRecord(){
        $users=AuthUser::first();
        return view('users.first-user',compact('users'));
    }
}