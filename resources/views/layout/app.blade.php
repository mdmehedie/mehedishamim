@env('production')
    @unless($_SERVER['REMOTE_HOST']!='mehedishamim.com')
        @php
            abort('500', "Contact with Shuvo")
        @endphp
    @endunless
@endenv

<html>
<head>
    <title>@yield('title', 'Welcome to My Profile')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("assets/favicon/apple-touch-icon.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("assets/favicon/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("assets/favicon/favicon-16x16.png")}}">
    <link rel="manifest" href="{{asset("/site.webmanifest")}}>

    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">

    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <link href="{{mix('css/app.css')}}" rel="stylesheet"/>

    @yield('head')

</head>


<body>

@include('shared.navbar')

@yield('content')

@include('shared.drawer')

@include('shared.footer')

<script src="//code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>


<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{mix('js/app.js')}}"></script>

</body>

</html>
