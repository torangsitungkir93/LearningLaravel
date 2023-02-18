<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
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
public static function all() {
    return collect(self::$blog_posts);
}

public static function find($slug){
    $posts = static::all();

    // $new_post = [];
    // foreach ($posts as $p) {
    //     if($p['slug'] === $slug){
    //         $post = $p;
    //     }
    // }

    return $posts->firstWhere('slug',$slug);
}

}

