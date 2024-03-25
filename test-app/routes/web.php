<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController ;  //เชื่อม controller


Route::get('/', function () {
    return view('welcome');
});
Route::get('/main', function () {   
    return view('test/main');
});
Route::get('/add', function () {   
    ;
});

Route::resource("/customer" , CustomerController :: class);