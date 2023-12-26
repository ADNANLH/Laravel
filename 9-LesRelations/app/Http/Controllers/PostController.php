<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('tags', 'category')->get();
        $categories = Category::all();
        $tags = Tag::all();
        return view('index', compact('posts','categories', 'tags'));
    }
}