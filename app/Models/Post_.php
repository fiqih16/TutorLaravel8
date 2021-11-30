<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post_
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

// <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi animi accusamus et dolor maxime architecto consequuntur dolores molestiae! Excepturi ea hic molestiae aspernatur
// quaerat, quam at architecto, fugiat vitae repellat inventore velit iusto asperiores? Quaerat provident totam aut ad, corporis fuga. Aliquam animi pariatur architecto amet quod nisi consectetur voluptate.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia nostrum reprehenderit odit! Fugiat, tenetur! Beatae cum ratione, vero labore qui quam
// quibusdam nobis nostrum quas! Eveniet, delectus aliquam! Quis officia consectetur perspiciatis consequatur possimus eligendi dolor a, assumenda natus illum voluptate minus. Ratione quam voluptates nesciunt doloremque sequi maxime veritatis!</p>

Post::create([
    'title' => 'Judul Tiga',
    'category_id' => 3,
    'slug' => 'judul-tiga',
    'excerpt' => 'Lorem ipsum Tiga-.',
    'body' => '<p>ssssssssssssssssssssssssssssssssssss</p><p>bbbbbbbbbbbb</p>'
]);

Category::create([
    'name' => 'Personal',
    'slug' => 'personal'
]);
