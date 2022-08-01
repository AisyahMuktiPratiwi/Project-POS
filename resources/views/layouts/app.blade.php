<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ADEAMART') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ewert&family=Kranky&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: rgb(252, 242, 208)">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm"  style="background-color:rgb(255, 139, 86)">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="font-family:'Kranky', cursive;color:white;font-size:30px;">
                    {{ ( 'ADEAMART') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                                <li class="nav-item">
                                    <a href="" style="color:white;text-decoration:none;"><i class="fab fa-whatsapp" style="font-size:25px;color:white"></i><span style="color:darkorange ">--</span> 0857-8686-5435</a>
                                </li>


                                <li class="nav-item">
                                    <a href="" style="color:white;text-decoration:none;"><i class="far fa-envelope"style="font-size:25px;color:white; margin-left:2rem;"></i><span style="color:darkorange ">--</span></i>adeamart@gmail.com</a>
                                </li>




                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
