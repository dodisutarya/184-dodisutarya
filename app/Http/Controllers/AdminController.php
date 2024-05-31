<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function create()
    {

        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'blog_content' => 'required',
            'category' => 'required',
            'tags' => 'required',
        ]);

        Blog::create([
            'title' => $request->title,
            'blog_content' => $request->blog_content,
            'category' => $request->category,
            'tags' => $request->tags
        ]);

        return redirect()->route('admin.index')->with(['success' => 'Blog created successfully!']);
    }
}
