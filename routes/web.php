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
route::get('/', function () {
    return view('welcome');
});
route::get('r1', function () {
    return redirect('r2');
});
route::get('r2', function () {
    return redirect('r3');
});
route::get('r3', function () {
    return view('welcome');
});
route::get('hello/{name?}', function($name = 'Everybody'){
   return 'Hello, '.$name;
})->name('hello.index');
