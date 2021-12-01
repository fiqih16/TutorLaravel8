<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Fiqih',
        //     'email' => 'fiqih1666@gmail.com',
        //     'password' => bcrypt('useradmin')
        // ]);

        // User::create([
        //     'name' => 'Ucup Gacor',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('useradmin')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Category::create([
            'name' => 'Web Personal',
            'slug' => 'web-personal'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime reiciendis, accusantium quaerat magni vel sapiente deleniti rem odit vitae, distinctio totam. Quae, impedit pariatur veritatis accusantium commodi',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia ipsa at error vero sapiente praesentium doloremque facere, aliquam vitae molestias commodi accusamus reprehenderit. Illum repellat eaque ipsam earum, vero, repudiandae nam delectus sapiente corporis atque nihil, provident maxime? Repudiandae quis aspernatur tempore nam nobis aut vero, neque at a iusto.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime reiciendis, accusantium quaerat magni vel sapiente deleniti rem odit vitae, distinctio totam. Quae, impedit pariatur veritatis accusantium commodi',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia ipsa at error vero sapiente praesentium doloremque facere, aliquam vitae molestias commodi accusamus reprehenderit. Illum repellat eaque ipsam earum, vero, repudiandae nam delectus sapiente corporis atque nihil, provident maxime? Repudiandae quis aspernatur tempore nam nobis aut vero, neque at a iusto.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime reiciendis, accusantium quaerat magni vel sapiente deleniti rem odit vitae, distinctio totam. Quae, impedit pariatur veritatis accusantium commodi',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia ipsa at error vero sapiente praesentium doloremque facere, aliquam vitae molestias commodi accusamus reprehenderit. Illum repellat eaque ipsam earum, vero, repudiandae nam delectus sapiente corporis atque nihil, provident maxime? Repudiandae quis aspernatur tempore nam nobis aut vero, neque at a iusto.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
