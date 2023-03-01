<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

use App\Models\Category;


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
    return view('home',[
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Torangto Situngkir",
        "email" => "torangsitungkir@gmail.com",
        "image" => "img1.jpg"
    ]);
});


Route::get('/blog', function () {

    return view('posts',[
        "title" => "Posts",
        "posts" => Post::all(),
    ]);
});

Route::get('/posts',[PostController::class,'index']);

// Halaman single post
Route::get('posts/{post:slug}',[PostController::class,'show']);

Route::get('categories/{categories:slug}',function(Category $category){
    return view('category',[
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
