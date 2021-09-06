<div class="drawer-container">
    <div class="position-absolute drawer" id="drawer">
        <div class="position-relative">
            <div class="position-absolute d-flex justify-content-center align-items-center" onclick="drawer()"
                 style="height: 3rem; width: 3rem; left: -3rem; background-color:white; font-size: 1rem; cursor: pointer;">
                <i class="fa fa-times"></i>
            </div>
        </div>
        <div class="bg-dark py-2 text-center">
            <a class=" text-decoration-none text-white fw-bolder" href="{{route('home')}}">THE BLOG OF <br/>MEHEDI SHAMIM</a>
        </div>
        <section class="mt-3">
            <div class="container px-2">
                <div id="carouselExampleIndicators"class="carousel slide"data-ride="carousel">
                    
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
        <ul class="list-group mt-4">
            @foreach(range(1, 10) as $item)
                <li class="list-group-item">Hello world</li>
            @endforeach
        </ul>
    </div>
</div>
