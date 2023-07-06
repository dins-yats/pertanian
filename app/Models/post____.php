<?php

namespace App\Models;



class post 
{
  private static $blog_posts= [
    [
    "title" => "Judul Post Pertama",
    "slug" => "Judul-Post-Pertama",
    "author" => "hayatudin",
    "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum consectetur doloribus optio nulla, libero repellendus. Nam corporis perspiciatis officiis quasi, enim ducimus aspernatur consectetur ipsam dolore ut at minus iusto."

],
[
    "title" => "Judul Post Kedua",
    "slug" => "Judul-Post-Kedua",
    "author" => "baudoin",
    "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum consectetur doloribus optio nulla, libero repellendus. Nam corporis perspiciatis officiis quasi, enim ducimus aspernatur consectetur ipsam dolore ut at minus iusto."
    ]
];

public static function all()
{
   return collect(self::$blog_posts); 
}

public static function find($slug)
{
    $posts = static::all();
    return $posts->firstWhere('slug', $slug);
    
}

}
