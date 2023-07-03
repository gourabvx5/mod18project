<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Post extends Controller
{
    
    public function latestPost()
    {
        return $this->hasOne(Post::class)->latest();
    }
    
    
    public function index(Post $posts)
    {
        return view('posts.index',[
            'posts' => $posts
        ]);

    }

    public function getPostsByCategory($id)
    {
        $category = Category::findOrFail($id);
        $posts = $category->posts;

        return view('posts.category', compact('posts', 'category'));
    }

    public function delete($id)
    {
        $posts = Post::find($id);
        $posts->delete();

    }
}
