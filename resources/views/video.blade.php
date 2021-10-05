@extends('layout.app')

@section('title',$post->name)

@section('content')
    <section class="py-3">
        <div class="container">
            <div class="row">

                <div class="col-sm-9">
                    <div class="embed-responsive embed-responsive-1by1 vid">
                        <iframe class="embed-responsive-item mw-100" src="{{$post->video}}"
                                allowfullscreen></iframe>
                    </div>

                    <h4 class="fw-bold py-2 mt-2">
                        {{$post->name}}
                    </h4>

                    {!! $post->description !!}
                </div>

                <div class="col-sm-3 justify-content-center">
                    <div class="mb-3">
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item mw-100" src="https://www.youtube.com/embed/A3PDXmYoF5U"
                                    allowfullscreen></iframe>
                        </div>
                        <p style="font-size: 12px; font-weight: 700; ">Can a pair of sunglasses help build compassion in
                            the classroom?</p>
                    </div>
                    <div class="mb-3">
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item mw-100" src="https://www.youtube.com/embed/A3PDXmYoF5U"
                                    allowfullscreen></iframe>
                        </div>
                        <p style="font-size: 12px; font-weight: 700; ">Can a pair of sunglasses help build compassion in
                            the classroom?</p>
                    </div>
                    <div class="mb-3">
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item mw-100" src="https://www.youtube.com/embed/A3PDXmYoF5U"
                                    allowfullscreen></iframe>
                        </div>
                        <p style="font-size: 12px; font-weight: 700; ">Can a pair of sunglasses help build compassion in
                            the classroom?</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="">
        <div class="container border-top py-5">
            <div class="d-flex justify-content-between">
                <h6 class="text-decoration-underline text-uppercase">
                    {{$post->category->name}}
                </h6>
                <a class="text-decoration-none text-dark"
                   href="{{route('category.show',['slug'=>$post->category->slug])}}"
                ><p>See More <i class="fa fa-long-arrow-right"></i></p></a
                >
            </div>
            <div class="row">
                @foreach($relatedPost as $item)
                    <div class="col-sm-4">
                        <div>
                            <a href="#" class="text-decoration-none text-dark fw-bold">
                                <img class="w-100 py-2"
                                     src="{{asset(\Illuminate\Support\Facades\Storage::url($item->avatar))}}"
                                     alt="{{$item->name}}"/>
                                <p>
                                    {{$item->name}}
                                </p>
                            </a>
                            <a href="{{route("post.show",['slug'=>$item->slug])}}" type="button"
                               class="btn btn-outline-dark btn-sm">
                                Read Post
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
