<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::orderBy('order')->where('status', 1)->first();
        return redirect()->route('specialVideo', ['slug' => $videos->slug]);
    }

    public function specialVideo($slug, Request $request)
    {
        $video = Video::where('slug', $slug)->first();

        $relatedVideos = Video::where('status', 1)->whereNotIn('id', [$video->id])->orderBy('order')->limit(12)->get();

        $videoPosts = Blog::where('type', 'video')->get()->groupBy('category_id');


        return response()->view('video', compact('video', 'relatedVideos', 'videoPosts'));
    }
}
