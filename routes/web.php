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

use App\Http\Controllers\form\formcontroller;
Route:: post('/submit', [formcontroller::class, 'submit']);
Route::get('/form',function(){
    return view('form');
});
use App\Http\Controllers\UserController;
Route::get('/users', [UserController::class, 'index']);
Route::get('/first-user',[UserController::class,'firstRecord']);

use App\Http\Controllers\EmployeeController;
Route::get('/employees',[EmployeeController::class,'index']);
Route::resource('employees',EmployeeController::class);
Route::resource('roles',RoleController::class);