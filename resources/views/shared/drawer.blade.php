<section class="drawer" id="drawer-name" data-drawer-target>
    <div class="drawer__overlay" data-drawer-close tabindex="-1">&times;</div>
    <div class="drawer__wrapper">
        <div class="drawer__header">
            <div class="drawer__title">
            </div>
            <button class="drawer__close" data-drawer-close aria-label="Close Drawer"></button>
        </div>

        <div class="drawer__content">
                <div class="drawer-header-img">
                    <img src="{{asset('assets/Mehedi-shamim.png')}}" alt="">
                </div>
            <section class="mt-3">
                <div class="card" style="width: 23rem;">
                    <div class="card-body">
                        <a class="text-decoration-none" href="{{route('home')}}" style="color: black">
                            THE THOUGHTS OF <br/>
                            MEHEDI SHAMIM
                        </a>
                    </div>
                  </div>
                {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    
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
                </div> --}}
            </section>

            <ul class="list-group mt-4">
                @foreach(\App\Models\Category::where('status',1)->orderBy('order')->get() as $item)
                    <a href="{{route('category.show',['slug'=>$item->slug])}}"
                       class="list-group-item border-none text-decoration-none">{{$item->name}}</a>

                @endforeach
            </ul>
        </div>
    </div>
</section>
