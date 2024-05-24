<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = [
            [
                "id" => 1,
                "title" => "How to make Controller in Laravel 11",
                "blog_content" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse molestias consequatur nemo non tenetur ipsam dolores maxime eligendi deleniti assumenda. Illum eum itaque praesentium in sit est labore nostrum molestiae.",
                "category" => "Teknologi",
                "date_post" => 2024 - 10 - 10,
                "username" => "Diantoro"
            ],
            [
                "id" => 2,
                "title" => "How to make Controller in Laravel 12",
                "blog_content" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse molestias consequatur nemo non tenetur ipsam dolores maxime eligendi deleniti assumenda. Illum eum itaque praesentium in sit est labore nostrum molestiae.",
                "category" => "Tutorial",
                "date_post" => 2024 - 10 - 10,
                "username" => "Amin Shah"
            ],
            [
                "id" => 3,
                "title" => "How to make Controller in Laravel 13",
                "blog_content" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse molestias consequatur nemo non tenetur ipsam dolores maxime eligendi deleniti assumenda. Illum eum itaque praesentium in sit est labore nostrum molestiae.",
                "category" => "Blog",
                "date_post" => 2024 - 10 - 10,
                "username" => "Ragnar"
            ]
        ];

        // dd($blogs);

        return view('blog.index', compact('blogs'));
    }
}
