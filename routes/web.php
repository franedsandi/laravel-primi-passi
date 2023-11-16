<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $saluto= "Hello Laravel!!!!!!!!!";
    return view('home', compact ('saluto'));
});
Route::get('/about', function () {
    $about= "about what? i am empty....!!!!!!!!!";
    return view('about', compact ('about'));
});
Route::get('/info', function () {
    $info= "What info are you loking for am really new over here!!!!!!!!!";
    return view('info', compact ('info'));
});
