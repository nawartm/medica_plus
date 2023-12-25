<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome_page</title>

        <style>
            body{
                background-image: url({{ asset('assets/subtle-prism.png') }}) ;
            }
        </style>

    </head>

    <header>

    </header>
    <body>
        
        <div class="header >
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Se Connecter</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">S'inscrire</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md" style="margin-right: 750px; text-align:left " >

             </div>
    </body>
</html>
