<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $hello = 'Hello World';
    $data = [
        'nav'=>['menu-1','menu-2', 'menu-3']
    ];
    return view('home',['hello'=>$hello],$data);
});

Route::get('/menu', function () {

    return view('menu');
});


