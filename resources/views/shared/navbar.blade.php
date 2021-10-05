<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white">
    <div class="container">
        <!-- Image Logo -->
        <a class="navbar-brand logo-image pb-2" href="{{route('home')}}">
            <img class="img-fluid" src="{{asset('assets/logo.png')}}" alt="alternative"/>
        </a>

        <a class="navbar-brand logo-text d-none d-lg-flex" href="{{route('home')}}">
            <div class="d-flex flex-column">
                <span>  THE BLOG OF</span>
                <span>MEHEDI SHAMIM</span>
            </div>
        </a>

        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end menu-content" id="navbarSupportedContent"
             aria-labelledby="navbarToggle">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Living Library</a>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Contribution
                    </a>
                    <ul
                        class="dropdown-menu"
                    >
                        <li>
                            <a class="dropdown-item" href="#"
                            >Community <b class="caret"></b
                                ></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('video')}}">Watch</a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" class="btn btn-sm" data-drawer-trigger aria-controls="drawer-name" aria-expanded="false">
                        <i class="fas fa-bars "></i> Menu
                    </a>
                </li>
            </ul>
        </div>
        <!-- end of navbar-collapse -->
    </div>
</nav>
