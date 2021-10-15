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
                    <a class="nav-link" href="">Living Library</a>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Fiction
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                        <a class="dropdown-item py-3" href="#">Poem <b class="caret"></b></a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item py-3" href="#">Short Stories <b class="caret"></b></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Contribution
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                        <a class="dropdown-item py-3" href="#">Community <b class="caret"></b></a>
                    </div>
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
