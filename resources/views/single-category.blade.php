@extends('layout.app')

@section('title',$category->name)

@section('content')
    @if ($category->posts->count() === 0)
        <h2>No Post Found!</h2>
    @endif


    @if($category->limit==3)
        <section class="p-4 bg-dark text-white mt-4">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <h6 class="text-decoration-underline text-uppercase">
                        {{$category->name}}
                    </h6>
                </div>

                <div class="row">
                    @foreach($category->posts as $post)
                        <div class="col-sm-4">
                            <div>
                                <a href="{{route("post.show",['slug'=>$post->slug])}}"
                                   class="text-decoration-none text-white">
                                    <img class="w-100 py-2"
                                         src="{{asset(storage_url($post->avatar))}}"
                                         alt="{{$post->name}}"/>
                                    <p>
                                        {{$post->name}}
                                    </p>
                                </a>
                                <a href="{{route("post.show",['slug'=>$post->slug])}}" type="button"
                                   class="btn btn-outline-light btn-sm">
                                    Read Post
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    @elseif($category->limit==4)
        <section class="p-4 mt-4">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <h6 class="text-decoration-underline text-uppercase">
                        {{$category->name}}
                    </h6>
                </div>

                <div class="row">
                    @foreach($category->posts as $post)
                        <div class="col-sm-3">
                            <div>
                                <a href="{{route("post.show",['slug'=>$post->slug])}}"
                                   class="text-decoration-none text-dark">
                                    <img class="w-100 py-2"
                                         src="{{asset(storage_url($post->avatar))}}"
                                         alt="{{$post->name}}"/>
                                    <h6 class="fw-bold" style="font-size: 14px;">{{$post->name}}</h6>

                                    <p style="font-size: 11px;">
                                        {{ substr(strip_tags($post->description),0, 120) }}
                                    </p>
                                </a>
                                <a href="{{route("post.show",['slug'=>$post->slug])}}" type="button"
                                   class="btn btn-outline-secondary btn-sm">
                                    Read Post
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
