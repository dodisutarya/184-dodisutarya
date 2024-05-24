<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('home');
});


Route::prefix('admin')->name("admin.")->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name("admin");

    Route::get('/create', [AdminController::class, 'create'])->name("create");
});



Route::prefix('blog')->name("blog.")->group(function () {

    // Route::get('/', function () {
    //     return view('blog/index');
    // })->name("listBlogs");

    Route::get('/', [BlogController::class, 'index'])->name("listBlogs");


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
