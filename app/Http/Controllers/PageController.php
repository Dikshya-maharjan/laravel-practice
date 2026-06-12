<?php

namespace App\Http\Controllers;
// namespace defines where this file belongs in laravel strcture
// App/
// |_Http/
//     |_Controllers/<- this file is here which is mentioned

// import request class
use Illuminate\Http\Request;
// illuminate is the engine inside the app,core laravel library

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
