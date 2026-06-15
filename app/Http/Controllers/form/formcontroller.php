<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class formcontroller extends Controller
{
    public function submit(Request $request){
        $name=$request->username;
        $age=$request->age;
        return "Name: $name,Age:$age";
    }
}
