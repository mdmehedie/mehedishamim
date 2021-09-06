@extends('layout.app')

@section('title',"My Post")

@section('content')
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="embed-responsive embed-responsive-1by1 vid">
                        <iframe class="embed-responsive-item mw-100" src="https://www.youtube.com/embed/A3PDXmYoF5U" allowfullscreen></iframe>
                    </div>
                    <h5 class="fw-bold py-2 mt-2">Can a pair of sunglasses help build compassion in the classroom?</h4>
                    <p >Brooke Brown, the 2021 Washington State Teacher of the Year, teaches ethnic studies and English to high school seniors. Her classes are a mix of history and group projects aimed at exploring identity. She was kind enough to show me one of her favorite lessons to do with her students, which was all about understanding how other people see the world.</p>
                </div>
                <div class="col-sm-3 justify-content-center">
                    <div class="mb-3">
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item mw-100" src="https://www.youtube.com/embed/A3PDXmYoF5U" allowfullscreen></iframe>
                        </div>
                        <p style="font-size: 12px; font-weight: 700; ">Can a pair of sunglasses help build compassion in the classroom?</p>
                    </div>
                    <div class="mb-3">
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item mw-100" src="https://www.youtube.com/embed/A3PDXmYoF5U" allowfullscreen></iframe>
                        </div>
                        <p style="font-size: 12px; font-weight: 700; ">Can a pair of sunglasses help build compassion in the classroom?</p>
                    </div>
                    <div class="mb-3">
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item mw-100" src="https://www.youtube.com/embed/A3PDXmYoF5U" allowfullscreen></iframe>
                        </div>
                        <p style="font-size: 12px; font-weight: 700; ">Can a pair of sunglasses help build compassion in the classroom?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="">
        <div class="container border-top py-5">
        <div class="d-flex justify-content-between">
            <h6 class="text-decoration-underline text-uppercase">
            Catagorie Name
            </h6>
            <a class="text-decoration-none text-dark" href="#"
            ><p>See More <i class="fa fa-long-arrow-right"></i></p></a
            >
        </div>
        <div class="row">
            <div class="col-sm-4">
            <div>
                <a href="#" class="text-decoration-none text-dark fw-bold">
                <img class="w-100 py-2" src="{{asset('assets/maxresdefault.jpg')}}" />
                <p>
                    This doctor’s life story is almost as remarkable as his work
                </p>
                </a>
                <button type="button" class="btn btn-outline-dark btn-sm">
                Read Post
                </button>
            </div>
            </div>

            <div class="col-sm-4">
            <div>
                <a href="#" class="text-decoration-none text-dark fw-bold">
                <img class="w-100 py-2" src="{{asset('assets/maxresdefault.jpg')}}" />
                <p>
                    This doctor’s life story is almost as remarkable as his work
                </p>
                </a>
                <button type="button" class="btn btn-outline-dark btn-sm">
                Read Post
                </button>
            </div>
            </div>

            <div class="col-sm-4">
            <div>
                <a href="#" class="text-decoration-none text-dark fw-bold">
                <img class="w-100 py-2" src="{{asset('assets/maxresdefault.jpg')}}" />
                <p>
                    This doctor’s life story is almost as remarkable as his work
                </p>
                </a>
                <button type="button" class="btn btn-outline-dark btn-sm">
                Read Post
                </button>
            </div>
            </div>
        </div>
        </div>
    </section>


    <section class="">
        <div class="container border-top py-5">
        <div class="d-flex justify-content-between">
            <h6 class="text-decoration-underline text-uppercase">
            Catagorie Name
            </h6>
            <a class="text-decoration-none text-dark" href="#"
            ><p>See More <i class="fa fa-long-arrow-right"></i></p></a
            >
        </div>
        <div class="row">
            <div class="col-sm-4">
            <div>
                <a href="#" class="text-decoration-none text-dark fw-bold">
                <img class="w-100 py-2" src="{{asset('assets/maxresdefault.jpg')}}" />
                <p>
                    This doctor’s life story is almost as remarkable as his work
                </p>
                </a>
                <button type="button" class="btn btn-outline-dark btn-sm">
                Read Post
                </button>
            </div>
            </div>

            <div class="col-sm-4">
            <div>
                <a href="#" class="text-decoration-none text-dark fw-bold">
                <img class="w-100 py-2" src="{{asset('assets/maxresdefault.jpg')}}" />
                <p>
                    This doctor’s life story is almost as remarkable as his work
                </p>
                </a>
                <button type="button" class="btn btn-outline-dark btn-sm">
                Read Post
                </button>
            </div>
            </div>

            <div class="col-sm-4">
            <div>
                <a href="#" class="text-decoration-none text-dark fw-bold">
                <img class="w-100 py-2" src="{{asset('assets/maxresdefault.jpg')}}" />
                <p>
                    This doctor’s life story is almost as remarkable as his work
                </p>
                </a>
                <button type="button" class="btn btn-outline-dark btn-sm">
                Read Post
                </button>
            </div>
            </div>
        </div>
        </div>
    </section>

@endsection
