<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white">
    <div class="container">

        <!-- Image Logo -->
        <a class="navbar-brand logo-image pb-2" href="{{route('home')}}">
            <img src="{{asset('assets/logo.png')}}" alt="alternative"/>
        </a>

        <a class="navbar-brand logo-text" href="{{route('home')}}">
            THE BLOG OF <br/>
            MEHEDI SHAMIM
        </a>

        <button
            class="navbar-toggler p-0 border-0"
            type="button"
            data-toggle="offcanvas"
        >
            <span class="navbar-toggler-icon" style="color: rgb(0, 0, 0)"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end menu-content"id="navbarNavDropdown">
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
                        aria-labelledby="navbarDropdownMenuLink"
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
                    <a class="nav-link" onclick="drawer()" href="#">menu
                        <i class="fas fa-bars "></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- end of navbar-collapse -->
    </div>
    <!-- end of container -->
</nav>
<!-- end of navbar -->
<!-- end of navigation -->
