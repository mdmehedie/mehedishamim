@extends('layout.app')

@section('title',$post->name." | Post")

@section('content')
    <section class="py-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div>
                        <h6 class="text-decoration-underline fw-bold text-uppercase">{{$post->category->name}}</h6>
                        <h2 class="fw-bolder"
                            style="font-family: Source Serif Pro;font-size: 40px; font-weight: 600; color: black;">
                            {{$post->name}}
                        </h2>
                        <p style="font-size: 12px;">By {{$post->user->name}}
                            | {{$post->updated_at->format('d M, Y')}}</p>
                    </div>
                    <div>
                        @if ($post->type=='photo')
                            <img class="w-100"
                                 src="{{asset(\Illuminate\Support\Facades\Storage::url($post->avatar))}}"
                                 alt="{{$post->name}}">
                        @else
                            <div class="embed-responsive embed-responsive-1by1 vid">
                                <iframe class="embed-responsive-item mw-100"
                                        title="YouTube video player" frameborder="0"
                                        src="{{$post->video}}"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                        @endif
                    </div>
                    <div class="pt-2 d-flex">
                        <a href="#" class="pe-3"><i class="fab fa-facebook-square text-dark "></i></a>
                        <a href="#" class="pe-3"><i class="fab fa-twitter text-dark"></i></a>
                        <a href="#" class="pe-3"><i class="fab fa-linkedin-in text-dark"></i></a>
                        <a href="#" class="pe-3"><i class="fas fa-envelope text-dark"></i></a>
                    </div>
                    <div class="my-3">
                        {!! $post->description !!}
                    </div>

                    <div class="row">
                        <h6 class="text-decoration-underline fw-bold">READ THIS NEXT</h6>

                        @foreach($relatedPost as $item)
                            <div class="col-4">
                                <div>
                                    <a href="{{route('post.show',['slug'=>$item->slug])}}"
                                       class="text-decoration-none text-dark">
                                        <img class="w-100 py-2"
                                             src="{{asset(\Illuminate\Support\Facades\Storage::url($item->avatar))}}"
                                             alt="{{$item->name}}"/>
                                        <h6 class="fw-bold" style="font-size: 14px;">
                                            {{$item->name}}
                                        </h6>
                                        <p style="font-size: 11px;">
                                            {{substr(strip_tags($item->description), 0, 120)}}
                                        </p>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
