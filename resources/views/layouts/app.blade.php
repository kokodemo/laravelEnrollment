<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/main.css">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - IES Matriculación</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/74ec47558a.js" crossorigin="anonymous"></script>

        <!-- Boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="{{ asset('images/esteve-logo.png') }}" draggable="true">
                <span>Instituto Esteve Terradas I Illa</span>
            </div>
            @unless (Auth::check())
                <div class="username">
                    <i class="fa fa-key" aria-hidden="true"></i> Invitad@
                </div>
            @else
                <div class="username">
                    <i class="far fa-user"></i> {{ $userLogged['name'] }} <span style="margin-left: 10px; margin-right: 10px;">|</span> <i class="fas fa-sign-out-alt" style="color: #FC3232;"></i>
                </div>
            @endunless
        </header>

        <nav>
            @if(Auth::check())
            <h2>Menú</h2>
            <ul>
                <li>
                    <a href="dashboard">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="courses">
                        <i class="fas fa-toolbox"></i> Cursos
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-user-friends"></i> Alumnos
                    </a>
                </li>
            </ul>
            @endif
        </nav>

        <div class="content">
            @yield('content')

            <footer>
                <p><?php echo date('Y'); ?> &copy; Kobloard</p>
            </footer>
        </div>
    </body>
</html>
