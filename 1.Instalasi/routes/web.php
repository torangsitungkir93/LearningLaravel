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
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Torangto Situngkir",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure recusandae hic fugit a corrupti eius magnam dicta, soluta dolorum, mollitia nobis. Molestias maxime earum distinctio qui repellendus fugit porro deleniti excepturi impedit ea dolorem, fuga eligendi deserunt temporibus. Tempora deserunt quasi inventore quas officiis rem? Saepe voluptatibus modi recusandae quo temporibus! Ab, sunt. Harum dignissimos recusandae, dolorem modi ex sed magni eum, quasi unde commodi, obcaecati minus voluptatum vero fugiat esse excepturi minima doloremque quos nostrum? Ut vero repellat architecto."
        ],[
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Erik Cantona",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure recusandae hic fugit a corrupti eius magnam dicta, soluta dolorum, mollitia nobis. Molestias maxime earum distinctio qui repellendus fugit porro deleniti excepturi impedit ea dolorem, fuga eligendi deserunt temporibus. Tempora deserunt quasi inventore quas officiis rem? Saepe voluptatibus modi recusandae quo temporibus! Ab, sunt. Harum dignissimos recusandae, dolorem modi ex sed magni eum, quasi unde commodi, obcaecati minus voluptatum vero fugiat esse excepturi minima doloremque quos nostrum? Ut vero repellat architecto."
        ],
    ];
    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts,
    ]);
});

// Halaman single post
Route::get('posts/{slug}',function($slug){

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Torangto Situngkir",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure recusandae hic fugit a corrupti eius magnam dicta, soluta dolorum, mollitia nobis. Molestias maxime earum distinctio qui repellendus fugit porro deleniti excepturi impedit ea dolorem, fuga eligendi deserunt temporibus. Tempora deserunt quasi inventore quas officiis rem? Saepe voluptatibus modi recusandae quo temporibus! Ab, sunt. Harum dignissimos recusandae, dolorem modi ex sed magni eum, quasi unde commodi, obcaecati minus voluptatum vero fugiat esse excepturi minima doloremque quos nostrum? Ut vero repellat architecto."
        ],[
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Erik Cantona",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure recusandae hic fugit a corrupti eius magnam dicta, soluta dolorum, mollitia nobis. Molestias maxime earum distinctio qui repellendus fugit porro deleniti excepturi impedit ea dolorem, fuga eligendi deserunt temporibus. Tempora deserunt quasi inventore quas officiis rem? Saepe voluptatibus modi recusandae quo temporibus! Ab, sunt. Harum dignissimos recusandae, dolorem modi ex sed magni eum, quasi unde commodi, obcaecati minus voluptatum vero fugiat esse excepturi minima doloremque quos nostrum? Ut vero repellat architecto."
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if($post['slug'] === $slug){
            $new_post = $post;
        }
    }
    return view('post',[
        "title" => "Single Post",
        "post" => $new_post,
    ]);
});
