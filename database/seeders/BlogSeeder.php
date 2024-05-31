<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'title' => 'Blog 1',
            'blog_content' => 'Description Blog 1',
            'category' => 'BlogCategory',
            'tags' => 'BlogTag'
        ]);
    }
}
