<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('style/app.css') }}">

    <title>Welcome_page</title>

    <style>
        body {
            background-image: url({{ asset('assets/subtle-prism.png') }});
        }
    </style>

</head>

<body>

    <header class="login">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Se Connecter</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">S'inscrire</a>
                @endif
            @endauth
        @endif
    </header>

    <section>
        <h1> hello 1</h1>
    </section>
    <section>
        <h1> hello 2</h1>
    </section>
    <section>
        <h1> hello 3</h1>
    </section>


</body>

</html>
