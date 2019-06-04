<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SIG - Sistema de Identificação de Gênios</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Bootstrap URL - CSS -->
        <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="{{ url('/themes/theme.css') }}">


        <!-- Ajax Script -->
        <script src="{{ url('/js/jquery-3.3.1.slim.js') }}"></script>
        <script src="{{ url('/js/bootstrap.min.js') }}"></script>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('script')

    </head>

    <body role="document">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">SRF - Sistema de Relatório Financeiro</a>
                </div>
                <div id="navbarSupportedContent" class="navbar-collapse collapse">

                    <!-- NavBar Right -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="active">
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="active">
                                    <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>



        <div class="container theme-showcase" role="main">
            <div class="page-header">
                <div class="page-header">
                    <h1 class="form-signin-heading">
                        @yield('cabecalho')
                    </h1>
                </div>
                @yield('content')
            </div>

        <b>&copy;2019
            &nbsp;&nbsp;&raquo;&nbsp;&nbsp;
            Adriano C. V. C. Yasuda
            &nbsp;&nbsp;&raquo;&nbsp;&nbsp;
            Copyright ©
        </b>

        
    </body>
</html>
