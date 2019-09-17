<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class postcontroller extends Controller
{
    public function slugify($slug){

        $post = Post::where('slug', $slug)->firstOrFail();
    
        return view('blog.show', ['post'=>$post]);
    }
}
