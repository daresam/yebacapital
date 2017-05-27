<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
    	$posts = Post::paginate(2);
    	return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::findByslug($slug);

        return view('blog.show', compact('post'));
    }



}
