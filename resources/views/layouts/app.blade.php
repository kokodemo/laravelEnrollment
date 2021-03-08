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

        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/74ec47558a.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="{{ asset('images/esteve.jpeg') }}" draggable="true">
                <span>Instituto Esteve Terradas I Illa</span>
            </div>
            @unless (Auth::check())
                <i class="fa fa-key" aria-hidden="true"></i> Invitad@
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
                    <a href="#">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
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
