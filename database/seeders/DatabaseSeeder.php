<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'septagian',
            'email' => 'septagian@gmail.com',
            'username' => 'septagiangmail',
            'password' =>  bcrypt('12345')
        ]);
        User::create([
            'name' => 'udinbatok',
            'email' => 'udinbatokotok@gmail.com',
            'username' => 'udinbatokotok',
            'password' =>  bcrypt('12345')
        ]);
        User::create([
            'name' => 'idamboylah',
            'email' => 'boylahidam@gmail.com',
            'username' => 'boylahidam',
            'password' =>  bcrypt('12345')
        ]);
        User::create([
            'name' => 'phodol',
            'email' => 'dodolipak@gmail.com',
            'username' => 'dodolipak',
            'password' =>  bcrypt('12345')
        ]);

        Category::create(
            [
                'name' => 'sayuran',
                'slug' => 'web-program'
            ]
        );

        Category::create(
            [
                'name' => 'cabe-cabean',
                'slug' => 'web-desgn'
            ]
        );

        Category::create(
            [
                'name' => 'sabun',
                'slug' => 'personal'
            ]
        );

        Product::create([
                 'title' => 'sayuran',
                 'slug' => 'judul-pertama',
                 'excerpt' => ' Possimus, voluptate iure. Ab,',
                 'Prince' =>'Rp:3.000',
                 'images' =>'3.jpg',
                 'category_id' => 1,
                 'user_id' => 1
             ]);
        Product::create([
                 'title' => 'bayam',
                 'slug' => 'judul-pertama',
                 'excerpt' => ' Possimus, voluptate iure. Ab,',
                 'Prince' =>'Rp:5.000',
                 'images' =>'6.jpg',
                 'category_id' => 1,
                 'user_id' => 1
             ]);
    
             Product::create([
                 'title' => 'cabe',
                 'slug' => 'judul-ke_dua',
                 'excerpt' => ' Possimus, voluptate iure. Ab,',
                 'Prince' =>'Rp:1.000',
                 'images' =>'4.jpg',
                 'category_id' => 2,
                 'user_id' => 2
             ]);
             Product::create([
                 'title' => 'cabe hijau',
                 'slug' => 'judul-ke_dua',
                 'excerpt' => ' Possimus, voluptate iure. Ab,',
                 'Prince' =>'Rp:15.000',
                 'images' =>'6.jpg',
                 'category_id' => 2,
                 'user_id' => 2
             ]);
    
             Product::create([
                 'title' => 'molto',
                 'slug' => 'judul-ke_tiga',
                 'excerpt' => ' Possimus, voluptate iure. Ab,',
                 'Prince' =>'Rp:7.000',
                 'images' =>'7.jpg',
                 'category_id' => 3,
                 'user_id' => 3
             ]);
             Product::create([
                 'title' => 'sampo',
                 'slug' => 'judul-ke_tiga',
                 'excerpt' => ' Possimus, voluptate iure. Ab,',
                 'Prince' =>'Rp:5.000',
                 'images' =>'8.jpg',
                 'category_id' => 3,
                 'user_id' => 3
             ]);


    }
}
