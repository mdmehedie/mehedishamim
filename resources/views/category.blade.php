@extends('layout.app')

@section('title',"Mehedi Shamim Personal Site")

@section('content')
    @foreach ($categories as $item)
        @if ($item->posts->count() === 0)
            @continue
        @endif

        @if($item->limit==3)
            <section class="p-4 bg-dark text-white mt-4">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-decoration-underline text-uppercase">
                            {{$item->name}}
                        </h6>

                        <a class="text-decoration-none text-white"
                           href="{{route('category.show',['slug'=>$item->slug])}}">
                            <p>See More <i class="fa fa-long-arrow-right"></i></p>
                        </a>
                    </div>

                    <div class="row">
                        @foreach($item->posts as $post)
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

        @elseif($item->limit==4)
            <section class="p-4 mt-4">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-decoration-underline text-uppercase">
                            {{$item->name}}
                        </h6>
                        <a class="text-decoration-none text-dark"
                           href="{{route('category.show',['slug'=>$item->slug])}}">
                            <p>See More <i class="fa fa-long-arrow-right"></i></p>
                        </a>
                    </div>

                    <div class="row">
                        @foreach($item->posts as $post)
                            <div class="col-sm-3">
                                <div>
                                    <a href="{{route("post.show",['slug'=>$post->slug])}}"
                                       class="text-decoration-none text-dark">
                                        <img class="w-100 py-2"
                                             src="{{asset(storage_url($post->avatar))}}"
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
