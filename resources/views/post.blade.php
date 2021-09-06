@extends('layout.app')

@section('title',"My Post")

@section('content')
    <section class="py-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div>
                        <h6 class="text-decoration-underline fw-bold text-uppercase">Catagorie Name</h6>
                        <h2 class="fw-bolder" style="font-family: Source Serif Pro;font-size: 40px; font-weight: 600; color: black;">A refreshingly honest take on the American presidency</h2>
                        <p style="font-size: 12px;">By Author Name | 14 JUNE, 2021</p>
                    </div>
                    <div>
                        <img class="w-100" src="{{asset('assets/summer-books_2021_a-promised-land_article-hero_1200x564_01.jpg')}}" alt="">
                    </div>
                    <div class="pt-2 d-flex">
                        <a href="#" class="pe-3"><i class="fab fa-facebook-square text-dark "></i></a>
                        <a href="#" class="pe-3"><i class="fab fa-twitter text-dark"></i></a>
                        <a href="#" class="pe-3"><i class="fab fa-linkedin-in text-dark"></i></a>
                        <a href="#" class="pe-3"><i class="fas fa-envelope text-dark"></i></a>
                    </div>
                    <div class="p-3 mb-3">
                        <p>I’m a big fan of presidential memoirs, but they tend to follow the same script. The author usually touts things that went well or repeats talking points you’ve heard from them before. I think the best writing about presidents is often done by a third party, because they’re able to be more objective. (The Bully Pulpit and Presidents of War are some of the best books I’ve read.)</p>
                        <p>I’m a big fan of presidential memoirs, but they tend to follow the same script. The author usually touts things that went well or repeats talking points you’ve heard from them before. I think the best writing about presidents is often done by a third party, because they’re able to be more objective. (The Bully Pulpit and Presidents of War are some of the best books I’ve read.)</p>
                        <p>I’m a big fan of presidential memoirs, but they tend to follow the same script. The author usually touts things that went well or repeats talking points you’ve heard from them before. I think the best writing about presidents is often done by a third party, because they’re able to be more objective. (The Bully Pulpit and Presidents of War are some of the best books I’ve read.)</p>
                        <p>I’m a big fan of presidential memoirs, but they tend to follow the same script. The author usually touts things that went well or repeats talking points you’ve heard from them before. I think the best writing about presidents is often done by a third party, because they’re able to be more objective. (The Bully Pulpit and Presidents of War are some of the best books I’ve read.)</p>
                        <p>I’m a big fan of presidential memoirs, but they tend to follow the same script. The author usually touts things that went well or repeats talking points you’ve heard from them before. I think the best writing about presidents is often done by a third party, because they’re able to be more objective. (The Bully Pulpit and Presidents of War are some of the best books I’ve read.)</p>
                    </div>

                    <div class="row">
                        <h6 class="text-decoration-underline fw-bold">READ THIS NEXT</h6>
                        <div class="col-4">
                            <div>
                                <a href="#" class="text-decoration-none text-dark">
                                    <img class="w-100 py-2" src="{{asset('assets/summer-books_2021_lights-out_blogroll_800x494_01.jpg')}}" />
                                    <h6 class="fw-bold" style="font-size: 14px;">This doctor’s life story is almost as remarkable as his work</h6>
                                    <p style="font-size: 11px;">A fascinating look at the stuff that makes modern life possible.</p>
                                </a>
                            </div>
                        </div>
                
                        <div class="col-4">
                            <div>
                                <a href="#" class="text-decoration-none text-dark">
                                    <img class="w-100 py-2" src="{{asset('assets/summer-books_2021_lights-out_blogroll_800x494_01.jpg')}}" />
                                    <h6 class="fw-bold" style="font-size: 14px;">This doctor’s life story is almost as remarkable as his work</h6>
                                    <p style="font-size: 11px;">A fascinating look at the stuff that makes modern life possible.</p>
                                </a>
                            </div>
                        </div>
                
                        <div class="col-4">
                            <div>
                                <a href="#" class="text-decoration-none text-dark">
                                    <img class="w-100 py-2" src="{{asset('assets/summer-books_2021_lights-out_blogroll_800x494_01.jpg')}}" />
                                    <h6 class="fw-bold" style="font-size: 14px;">This doctor’s life story is almost as remarkable as his work</h6>
                                    <p style="font-size: 11px;">A fascinating look at the stuff that makes modern life possible.</p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
