<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('');
// });
// Route::get('/goodbye',function(){
//     return view('goodbye',['user'=>'Dikshya']);
// });
use App\Http\Controllers\PageController;
Route::get('/welcome',[PageController::class,'welcome']);
Route::get('/goodbye',[PageController::class,'goodbye']);
Route::get('/home',function(){
    return view('home');
});