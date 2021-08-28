@extends('layout.app')

@section('title',"My Post")

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6 position-relative">
                <div class="m-5">
                    <img src="{{asset('assets/mehedi_shamin.jpg')}}" class="profile" style="z-index:4;"/>
                    <div class="profile-bg position-absolute">
                    </div>
                </div>
            </div>

            <div class="col-sm-6 d-flex flex-column justify-content-center">
                <h1>Hello</h1>
            </div>
        </div>
    </div>

    <section class="py-3">
        <a href="#" class="text-decoration-none text-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                            <img class="w-100" src="{{asset('assets/header.jpg')}}" alt=""/>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex p-4 flex-column justify-content-center align-self-stretch flex-grow-1">

                        <h5 class="text-uppercase text-decoration-underline fw-bold">
                            The future's so bright
                        </h5>
                        <h1 class="fw-bolder"
                            style="font-family: Source Serif Pro;font-size: 40px; font-weight: 600; color: black;">
                            Can a pair of sunglasses help build compassion in the
                            classroom?
                        </h1>
                        <p>
                            Washington State Teacher of the Year Brooke Brown helps her
                            students explore their identity.
                        </p>
                        <div class="d-flex text-dark" style="font-size: 12px;">
                            <p> By User Name</p>
                            <p class="px-2">|</p>
                            <p class="px-1 ">JULY 11 2021</p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </a>
    </section>

    <section>
        <div class="container px-2">
            <div
                id="carouselExampleIndicators"
                class="carousel slide"
                data-ride="carousel"
            >
                <ol class="carousel-indicators">
                    <li
                        data-target="#carouselExampleIndicators"
                        data-slide-to="0"
                        class="active"
                    ></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img
                            class="d-block w-100"
                            src="{{asset('assets/slider-1.jpg')}}"
                            alt="First slide"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                            class="d-block w-100"
                            src="{{asset('assets/slider-1.jpg')}}"
                            alt="Second slide"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                            class="d-block w-100"
                            src="{{asset('assets/slider-2.jpg')}}"
                            alt="Third slide"
                        />
                    </div>
                </div>
                <a
                    class="carousel-control-prev"
                    href="#carouselExampleIndicators"
                    role="button"
                    data-slide="prev"
                >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a
                    class="carousel-control-next"
                    href="#carouselExampleIndicators"
                    role="button"
                    data-slide="next"
                >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </section>

    <section class="p-4 bg-dark text-white mt-4">
        <div class="container">
            <div class="d-flex justify-content-between">
                <h6 class="text-decoration-underline text-uppercase">
                    Catagorie Name
                </h6>
                <a class="text-decoration-none text-white" href="#"
                ><p>See More <i class="fa fa-long-arrow-right"></i></p></a
                >
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div>
                        <a href="#" class="text-decoration-none text-white">
                            <img class="w-100 py-2" src="{{asset('assets/maxresdefault.jpg')}}"/>
                            <p>
                                This doctor’s life story is almost as remarkable as his work
                            </p>
                        </a>
                        <button type="button" class="btn btn-outline-light btn-sm">
                            Read Post
                        </button>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div>
                        <a href="#" class="text-decoration-none text-white">
                            <img class="w-100 py-2" src="{{asset('assets/maxresdefault.jpg')}}"/>
                            <p>
                                This doctor’s life story is almost as remarkable as his work
                            </p>
                        </a>
                        <button type="button" class="btn btn-outline-light btn-sm">
                            Read Post
                        </button>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div>
                        <a href="#" class="text-decoration-none text-white">
                            <img class="w-100 py-2" src="{{asset('assets/maxresdefault.jpg')}}"/>
                            <p>
                                This doctor’s life story is almost as remarkable as his work
                            </p>
                        </a>
                        <button type="button" class="btn btn-outline-light btn-sm">
                            Read Post
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-4 mt-4">
        <div class="container">
            <div class="d-flex justify-content-between">
                <h6 class="text-decoration-underline text-uppercase">
                    Catagorie Name
                </h6>
                <a class="text-decoration-none text-dark" href="#">
                    <p>See More <i class="fa fa-long-arrow-right"></i></p>
                </a>
            </div>

            <div class="row">

                <div class="col-sm-3">
                    <div>
                        <a href="#" class="text-decoration-none text-dark">
                            <img class="w-100 py-2"
                                 src="{{asset('assets/summer-books_2021_an-elegant-defense_thumbnail_320px_FPO_01.jpg')}}"/>
                            <h6 class="fw-bold" style="font-size: 14px;">This doctor’s life story is almost as
                                remarkable as his work</h6>
                            <p style="font-size: 11px;">A fascinating look at the stuff that makes modern life
                                possible.</p>
                        </a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div>
                        <a href="#" class="text-decoration-none text-dark">
                            <img class="w-100 py-2"
                                 src="{{asset('assets/summer-books_2021_an-elegant-defense_thumbnail_320px_FPO_01.jpg')}}"/>
                            <h6 class="fw-bold" style="font-size: 14px;">This doctor’s life story is almost as
                                remarkable as his work</h6>
                            <p style="font-size: 11px;">A fascinating look at the stuff that makes modern life
                                possible.</p>
                        </a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div>
                        <a href="#" class="text-decoration-none text-dark">
                            <img class="w-100 py-2"
                                 src="{{asset('assets/summer-books_2021_an-elegant-defense_thumbnail_320px_FPO_01.jpg')}}"/>
                            <h6 class="fw-bold" style="font-size: 14px;">This doctor’s life story is almost as
                                remarkable as his work</h6>
                            <p style="font-size: 11px;">A fascinating look at the stuff that makes modern life
                                possible.</p>
                        </a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div>
                        <a href="#" class="text-decoration-none text-dark">
                            <img class="w-100 py-2"
                                 src="{{asset('assets/summer-books_2021_an-elegant-defense_thumbnail_320px_FPO_01.jpg')}}"/>
                            <h6 class="fw-bold" style="font-size: 14px;">This doctor’s life story is almost as
                                remarkable as his work</h6>
                            <p style="font-size: 11px;">A fascinating look at the stuff that makes modern life
                                possible.</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="p-4 mt-4">
        <div class="container">
            <div class="d-flex justify-content-between">
                <h6 class="text-decoration-underline text-uppercase fw-bold">
                    Catagorie Name
                </h6>
                <a class="text-decoration-none text-dark" href="#">
                    <p>See More <i class="fa fa-long-arrow-right"></i></p>
                </a>
            </div>

            <div class="row">

                <div class="col-sm-3">
                    <div>
                        <a href="#" class="text-decoration-none text-dark">
                            <img class="w-100 py-2"
                                 src="{{asset('assets/htacd_2021_how-you-can-help_blogroll_800x494_03.jpg')}}"/>
                            <h6 class="fw-bold" style="font-size: 14px;">This doctor’s life story is almost as
                                remarkable as his work</h6>
                            <p style="font-size: 11px;">A fascinating look at the stuff that makes modern life
                                possible.</p>
                        </a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div>
                        <a href="#" class="text-decoration-none text-dark">
                            <img class="w-100 py-2" src="{{asset('assets/gavi_2020_blogroll_800x494_01.jpg')}}"/>
                            <h6 class="fw-bold" style="font-size: 14px;">This doctor’s life story is almost as
                                remarkable as his work</h6>
                            <p style="font-size: 11px;">A fascinating look at the stuff that makes modern life
                                possible.</p>
                        </a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div>
                        <a href="#" class="text-decoration-none text-dark">
                            <img class="w-100 py-2"
                                 src="{{asset('assets/htacd_2021_how-you-can-help_blogroll_800x494_03.jpg')}}"/>
                            <h6 class="fw-bold" style="font-size: 14px;">This doctor’s life story is almost as
                                remarkable as his work</h6>
                            <p style="font-size: 11px;">A fascinating look at the stuff that makes modern life
                                possible.</p>
                        </a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div>
                        <a href="#" class="text-decoration-none text-dark">
                            <img class="w-100 py-2" src="{{asset('assets/gavi_2020_blogroll_800x494_01.jpg')}}"/>
                            <h6 class="fw-bold" style="font-size: 14px;">This doctor’s life story is almost as
                                remarkable as his work</h6>
                            <p style="font-size: 11px;">A fascinating look at the stuff that makes modern life
                                possible.</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
