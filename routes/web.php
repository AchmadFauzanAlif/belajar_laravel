<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('/home',['title' => "Home"]);
});

Route::get('/about', function () {
    return view('/about', ["nama" => "Alif Fitrah", "title" => "About"]);
});

Route::get('/posts', function () {
    return view('/posts', ['title' => "Blog", 'posts' => [
        [
            'id' => 1,
            'slug' => 'maling-bensin',
            'title' => 'Maling Bensin',
            'author' => 'Fauzan Alif Fitrah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam rem distinctio suscipit modi, perspiciatis vero quo quasi quis laborum illum, maiores dignissimos ducimus dolore libero laboriosam placeat, impedit nobis alias dolorum quaerat debitis eum ipsam error est? Perferendis blanditiis necessitatibus officia consequuntur veritatis qui facere officiis non asperiores, cum modi, eaque, beatae magni corrupti esse laboriosam et repellendus quas. Non dolor ad esse. Velit repudiandae ex, nam vel, consequuntur nostrum neque blanditiis ipsum optio quod dolorem voluptatum nobis sit in asperiores est harum quia voluptatibus ducimus at iure vero. Fugit optio iste, sit aliquid fuga quos unde non quasi quibusdam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est totam dolores doloribus tempora dignissimos. Dolores nostrum omnis sunt laboriosam sed atque error eligendi ullam provident ducimus. Fugiat a assumenda quasi.'
            
        ],
        [
            'id' => 2,
            'slug' => 'maling-kayu',
            'title' => 'Maling Kayu',
            'author' => 'Fauzan Alif Fitrah',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur laborum numquam odit dicta voluptatibus at omnis autem a quisquam ab quasi adipisci quam, libero explicabo saepe. Ad quasi aspernatur veritatis laudantium. Iste repudiandae quo, aliquid dolore quibusdam nemo modi impedit quod, fugit doloremque dolorum optio error amet voluptas, repellat nulla. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae quisquam placeat amet, asperiores provident quos distinctio? Commodi non, sit totam neque atque omnis. Ipsam magnam nihil aliquam animi voluptas necessitatibus similique dolore et, mollitia totam architecto odio, veniam reiciendis in ipsum corrupti neque esse expedita. Ipsa alias id ex vel eos velit corrupti iusto. Saepe impedit atque tempora soluta perferendis?'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {

    $posts = [
            [
                'id' => 1,
                'title' => 'Maling Bensin',
                'slug' => 'maling-bensin',
                'author' => 'Fauzan Alif Fitrah',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam rem distinctio suscipit modi, perspiciatis vero quo quasi quis laborum illum, maiores dignissimos ducimus dolore libero laboriosam placeat, impedit nobis alias dolorum quaerat debitis eum ipsam error est? Perferendis blanditiis necessitatibus officia consequuntur veritatis qui facere officiis non asperiores, cum modi, eaque, beatae magni corrupti esse laboriosam et repellendus quas. Non dolor ad esse. Velit repudiandae ex, nam vel, consequuntur nostrum neque blanditiis ipsum optio quod dolorem voluptatum nobis sit in asperiores est harum quia voluptatibus ducimus at iure vero. Fugit optio iste, sit aliquid fuga quos unde non quasi quibusdam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est totam dolores doloribus tempora dignissimos. Dolores nostrum omnis sunt laboriosam sed atque error eligendi ullam provident ducimus. Fugiat a assumenda quasi.'
                
            ],
            [
                'id' => 2,
                'title' => 'Maling Kayu',
                'slug' => 'maling-kayu',
                'author' => 'Fauzan Alif Fitrah',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur laborum numquam odit dicta voluptatibus at omnis autem a quisquam ab quasi adipisci quam, libero explicabo saepe. Ad quasi aspernatur veritatis laudantium. Iste repudiandae quo, aliquid dolore quibusdam nemo modi impedit quod, fugit doloremque dolorum optio error amet voluptas, repellat nulla. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae quisquam placeat amet, asperiores provident quos distinctio? Commodi non, sit totam neque atque omnis. Ipsam magnam nihil aliquam animi voluptas necessitatibus similique dolore et, mollitia totam architecto odio, veniam reiciendis in ipsum corrupti neque esse expedita. Ipsa alias id ex vel eos velit corrupti iusto. Saepe impedit atque tempora soluta perferendis?'
            ]
        ];

    $post = Arr::first($posts, function($post) use($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Singel Post', 'post' => $post]);

});

Route::get('/contact', function () {
    return view('/contact', ['title' => 'Contact']);
});