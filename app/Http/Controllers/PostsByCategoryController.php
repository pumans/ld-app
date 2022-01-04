<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsByCategoryController extends Controller
{
    public function __invoke($key): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $category = Category::where('id', '=', $key)->first();
        $posts = Post::where('category_id', '=', $category->id)->orderBy('created_at', 'DESC')->paginate(4);
        return view('posts_by_category', ['category' => $category, 'posts' => $posts]);
    }
}
