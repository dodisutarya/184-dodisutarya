<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::prefix('blog')->name("blog.")->group(function () {

    Route::get('/', function () {
        return view('blog/index');
    })->name("listBlogs");

    Route::get('/{id}', function () {
        return view('blog/detailblog');
    })->name("detailBlog");

    Route::get('/category', function () {
        return view('blog/categorys');
    })->name("categoryBlogs");

    Route::get('/tag', function () {
        return view('blog/tags');
    })->name("tagBlogs");
});

Route::prefix('auth')->name("auth.")->group(function () {
    Route::get('/login', function () {
        return view('auth/login');
    })->name("login");

    Route::get('/register', function () {
        return view('auth/register');
    })->name("register");
});
