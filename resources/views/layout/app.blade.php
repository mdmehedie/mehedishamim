<html>
<head>
    <title>@yield('title', 'Welcome to My Profile')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    

    <link href="{{mix('css/app.css')}}" rel="stylesheet"/>

    @yield('head')

    <style>
        .drawer-container {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: -1;
            transition: all 200ms;
        }

        .drawer-container.active {
            z-index: 4000;
            transition: all 200ms;
            background: rgba(0, 0, 0, .5);
        }

        .drawer-container .drawer {
            top: 0;
            bottom: 0;
            right: -380px;
            width: 350px !important;
            background: white;
        }

    </style>
</head>


<body>
@include('shared.navbar')

@yield('content')
@include('shared.drawer')

@include('shared.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
        crossorigin="anonymous"></script>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('js/wow.min.js')}}"></script>


<script>
    $(window).ready(function () {

    
    // Initiate the wowjs
    new WOW().init();
    
    var drawer_state = 0;

        window.drawer = function () {
            if (drawer_state === 0) {
                drawer_state = 1;

                $("#drawer").animate({right: 0}, 200);
                $("#drawer").parent("div").addClass('active');
            } else {
                drawer_state = 0;
                $("#drawer").animate({right: '-380px'}, 200);
                $("#drawer").parent("div").removeClass('active');
            }
        }
    });
</script>
</body>

</html>
