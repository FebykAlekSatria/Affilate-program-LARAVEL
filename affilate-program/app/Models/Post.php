<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            "title" => "7 Laptop Mahasiswa",
            "slug" => "7-laptop-mahasiswa",
            "desc" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            "body" => [
                [
                    "title" => "acer",
                    "image" => "https://akcdn.detik.net.id/visual/2020/06/02/09fb4d2c-e9d4-4949-b26d-969983c4bd54_169.jpeg?w=650",
                    "body" => "ini body acer"
                ],
                [
                    "title" => "asus",
                    "image" => "https://akcdn.detik.net.id/visual/2020/06/02/09fb4d2c-e9d4-4949-b26d-969983c4bd54_169.jpeg?w=650",
                    "body" => "ini body asus"
                ]
            ],

        ],

    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $post = static::all();
        return $post->firstWhere('slug', $slug);
    }
}
