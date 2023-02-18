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
    return view('home');
});

Route::get('/about', function () {
    return view('about',[
        "name" => "Torangto Situngkir",
        "email" => "torangsitungkir@gmail.com",
        "image" => "img1.jpg"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});
