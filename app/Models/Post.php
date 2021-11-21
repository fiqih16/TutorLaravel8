<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul=post-pertama",
            "author" => "Fiqih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, temporibus quae libero, assumenda quasi, maxime laboriosam iure reiciendis vitae repellendus unde aliquam voluptatum sequi laudantium quia incidunt odio aut enim."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul=post-kedua",
            "author" => "Joni",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, placeat. Ab odio iusto vitae dolorem doloribus perferendis a? Ex cum, quasi consequuntur quas quos veniam vel. Quam libero iusto expedita nostrum harum excepturi reiciendis asperiores in nulla. Molestiae expedita, incidunt in voluptatibus consectetur, voluptate harum exercitationem dolore totam iure enim quibusdam impedit magni, tempore adipisci odit excepturi laborum illum reprehenderit voluptas. Provident similique sint eius, doloremque tempore amet dolores exercitationem saepe quas fugiat fugit placeat atque corrupti ad animi odio sapiente debitis officiis quasi, quidem esse quam perspiciatis vero. Repellat doloribus voluptatem molestiae porro eveniet velit error, possimus dolorem exercitationem!"
        ],
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