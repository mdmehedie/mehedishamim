@extends('layout.app')

@section('title',$video->name??'')

@section('content')
    <section class="py-3">
        <div class="container">
            <div class="row">

                <div class="col-sm-9">
                    <div class="embed-responsive embed-responsive-1by1 vid">
                        <iframe class="embed-responsive-item mw-100"
                                src="https://www.youtube.com/embed/{{getYoutubeIdFromUrl($video->video_link)}}"
                                allowfullscreen></iframe>
                    </div>

                    <h4 class="fw-bold py-2 mt-2">
                        {{$video->name??''}}
                    </h4>

                    {!! $video->description??'' !!}
                </div>

                <div class="col-sm-3 justify-content-center d-flex" style="height: 40rem;">
                    <div class="align-self-stretch overflow-auto">
                        @foreach($relatedVideos as $item)
                            <a href="{{route('specialVideo',['slug'=>$item->slug])}}"
                               class="mb-3 text-decoration-none">
                                <img
                                    src="https://img.youtube.com/vi/{{getYoutubeIdFromUrl($item->video_link)}}/hqdefault.jpg"
                                    width="250" height="130"/>
                                <p style="font-size: 12px; font-weight: 700; ">{{$item->name}}</p>
                            </a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="">
        <div class="container border-top py-5">

            @foreach($videoPosts as $item)
                @php
                    $category =$item[0]->category;
                @endphp
                <div class="d-flex justify-content-between">
                    <h6 class="text-decoration-underline text-uppercase">
                        {{$category->name}}
                    </h6>
                    <a class="text-decoration-none text-dark"
                       href="{{route('category.show',['slug'=>$category->slug??''])}}"
                    >
                        <p>See More <i class="fa fa-long-arrow-right"></i></p>
                    </a>
                </div>
                <div class="row my-4">
                    @foreach($item as $post)
                        <div class="col-sm-4">
                            <div>
                                <a href="{{route("post.show",['slug'=>$post->slug])}}"
                                   class="text-decoration-none text-dark fw-bold">
                                    <img class="w-100 py-2"
                                         src="{{asset(\Illuminate\Support\Facades\Storage::url($post->avatar))}}"
                                         alt="{{$post->name}}"/>
                                    <p>
                                        {{$post->name}}
                                    </p>
                                </a>

                                <a href="{{route("post.show",['slug'=>$post->slug])}}" type="button"
                                   class="btn btn-outline-dark btn-sm">
                                    Read Post
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

            @endforeach
        </div>
    </section>
@endsection
