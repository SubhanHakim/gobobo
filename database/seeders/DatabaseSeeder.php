<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\Category;
use App\Models\Information;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => "subhanhakim",
            'email' => 'subhanhakim07@gmail.com',
            'password' => bcrypt('12345')
        ]);


        User::factory(3)->create();


        Category::create([
            'name'=> 'Villa',
            'slug' => 'villa'
        ]);

        Category::create([
            'name'=> 'Hotels',
            'slug' => 'Hotels'
        ]);
        Category::create([
            'name'=> 'Coming Soon',
            'slug' => 'Coming Soon'
        ]);


        // Post::create([
        //     'title' => "Villa Pertama",
        //     'slug' => 'villa-pertama',
        //     'city' => 'Bandung',
        //     'country' => 'Indonesia',
        //     'desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem ipsum voluptate adipisci maxime hic, veritatis saepe totam atque officiis molestiae nisi in molestias laborum autem qui nam vitae! Animi nesciunt repellat eum voluptatum saepe? Voluptatibus provident quod iste deserunt aperiam officiis, asperiores rem eaque! Eum, doloribus dignissimos veniam inventore illum minus quae mollitia nemo labore fugit quod minima! Natus commodi libero voluptatum aliquam odio fugiat alias voluptatem, velit quae aliquid explicabo eveniet soluta at rerum assumenda in saepe molestiae neque iure animi perspiciatis? Dolorum officiis debitis exercitationem rerum ut ducimus. Deserunt quis, quaerat ratione alias sed optio adipisci. Rem, voluptatem!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => "Hotels Pertama",
        //     'slug' => 'hotels-pertama',
        //     'city' => 'Bandung',
        //     'country' => 'Indonesia',
        //     'desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem ipsum voluptate adipisci maxime hic, veritatis saepe totam atque officiis molestiae nisi in molestias laborum autem qui nam vitae! Animi nesciunt repellat eum voluptatum saepe? Voluptatibus provident quod iste deserunt aperiam officiis, asperiores rem eaque! Eum, doloribus dignissimos veniam inventore illum minus quae mollitia nemo labore fugit quod minima! Natus commodi libero voluptatum aliquam odio fugiat alias voluptatem, velit quae aliquid explicabo eveniet soluta at rerum assumenda in saepe molestiae neque iure animi perspiciatis? Dolorum officiis debitis exercitationem rerum ut ducimus. Deserunt quis, quaerat ratione alias sed optio adipisci. Rem, voluptatem!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

    }
}
