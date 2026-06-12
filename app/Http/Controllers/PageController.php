<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //First View
    public function welcome(){
        return view('welcome');//file name like welcome.blade.php bata leko 
    }
    //second view
    public function goodbye(){
        $user='Dikshya';
        return view('goodbye',['user'=>$user]);
    }
}
