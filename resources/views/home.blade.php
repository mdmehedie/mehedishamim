@extends('layout.app')

@section('title',"Mehedi Shamim Personal Site")

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-sm-6 position-relative">
                <div class="m-5">
                    <img src="{{asset(storage_url($home->avatar))}}" alt="{{$home->site_name}}" class="profile"
                         style="z-index:4;"/>
                    <div class="profile-bg position-absolute">
                    </div>
                </div>
            </div>

            <div class="col-sm-6 d-flex flex-column justify-content-center align-self-stretch flex-grow-1">
                <h1 class="fw-bolder">Unleash Your Creativity</h1>
                <p class="lead">This is a theme carefully designed and developed to get the most out of the new
                    WordPress editor. Unleash the power of blocks - an awesome new way of creating rich content in
                    WordPress!</p>

                <div class="d-flex align-items-center">
                    <button class="btn btn-outline-dark w-25 mr-5">Find Out more</button>
                    <a href="#" class="px-2"><i class="fab fa-facebook-square text-dark fa-2x"></i></a>
                    <a href="#" class="px-2"><i class="fab fa-twitter text-dark fa-2x"></i></a>
                    <a href="#" class="px-2"><i class="fab fa-linkedin-in text-dark fa-2x"></i></a>
                    <a href="#" class="px-2"><i class="fas fa-envelope text-dark fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>



    @foreach ($homeCategory as $item)
        @php
            $category= $item->category
        @endphp



        @if($category->limit==1)
            <section class="py-5">
                <a href="#" class="text-decoration-none text-dark" style="background-color: {{$category->color}}">
                    <div class="container">
                        <div class="row">
                            @foreach($category->posts as $post)
                                <div
                                    class="col-sm-6 d-flex p-4 flex-column justify-content-center align-self-stretch flex-grow-1">
                                    <h5 class="text-uppercase text-decoration-underline fw-bold">
                                        {{$category->name}}
                                    </h5>
                                    <h1 class="fw-bolder"
                                        style="font-family: Source Serif Pro;font-size: 40px; font-weight: 600; color: black;">
                                        {{$post->name}}
                                    </h1>
                                    {!! substr(strip_tags($post->description),0, 200) !!}
                                    <div class="d-flex text-dark" style="font-size: 12px;">
                                        <p> By {{$post->user->name}}</p>
                                        <p class="px-2">|</p>
                                        <p class="px-1 ">{{$post->updated_at->format("M d Y")}}</p>
                                    </div>

                                </div>

                                <div class="col-sm-6 ">
                                    <div>
                                        <img class="w-100"
                                             src="{{asset(\Illuminate\Support\Facades\Storage::url($post->avatar))}}"
                                             alt="{{$post->name}}"/>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </a>
            </section>

        @elseif($category->limit==3)
            <section class="p-4 text-white mt-4" style="background-color: {{$category->color}}">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-decoration-underline text-uppercase">
                            {{$category->name}}
                        </h6>

                        <a class="text-decoration-none text-white"
                           href="{{route('category.show',['slug'=>$category->slug])}}">
                            <p>See More <i class="fa fa-long-arrow-right"></i></p>
                        </a>
                    </div>

                    <div class="row">
                        @foreach($category->posts as $post)
                            <div class="col-sm-4">
                                <div>
                                    <a href="{{route("post.show",['slug'=>$post->slug])}}"
                                       class="text-decoration-none text-white">
                                        <img class="w-100 py-2"
                                             src="{{asset(\Illuminate\Support\Facades\Storage::url($post->avatar))}}"
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
            <section class="p-4 mt-4" style="background-color: {{$category->color}}">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-decoration-underline text-uppercase">
                            {{$category->name}}
                        </h6>
                        <a class="text-decoration-none text-dark"
                           href="{{route('category.show',['slug'=>$category->slug])}}">
                            <p>See More <i class="fa fa-long-arrow-right"></i></p>
                        </a>
                    </div>

                    <div class="row">
                        @foreach($category->posts as $post)
                            <div class="col-sm-3">
                                <div>
                                    <a href="{{route("post.show",['slug'=>$post->slug])}}"
                                       class="text-decoration-none text-dark">
                                        <img class="w-100 py-2"
                                             src="{{asset(\Illuminate\Support\Facades\Storage::url($post->avatar))}}"
                                             alt="{{$post->name}}"/>
                                        <h6 class="fw-bold" style="font-size: 14px;">{{$post->name}}</h6>
                                        <p style="font-size: 11px;">
                                            {!! substr(strip_tags($post->description),0, 200) !!}
                                        </p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    @endforeach
@endsection
