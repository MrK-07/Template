<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="/fontawesome-free-5.14.0/css/all.css" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
        <!-- Estilos -->
        <link rel="stylesheet" href="/css/menu-top.css">

        
    </head>
    <body>
        
        <!-- MENU TOP -->
        <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="/">
            <img src="/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="logo" loading="lazy">
            Site
        </a>

        @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"><i class="fas fa-user"></i> Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><i class="fas fa-pen-square"></i> Registrar</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>


<!-- CONTEÚDO DAS PÁGINAS -->
            <div class="container-fluid">
             @yield('pagina')       
                    
            </div>


            </div>
        </div>

<!-- Jquery, Pooper.js, Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
