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
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ucup Gacor",
        "email" => "ucupgacor@gmail.com",
        "image" => "icon.jpeg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});