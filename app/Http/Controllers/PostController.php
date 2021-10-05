<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = Blog::where('slug', $slug)->where('status', 1)->first();
        abort_unless($post, 404);


        $relatedPost = Blog::where('category_id', $post->category_id)->whereNotIn('id', [$post->id])->inRandomOrder()->limit(3)->get();

        return response()->view('post', [
            'post' => $post,
            'relatedPost' => $relatedPost
        ]);
    }
}
