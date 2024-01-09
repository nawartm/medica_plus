<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('style/app.css') }}">

    <title>Welcome_page</title>

    <style>
        body {
            background-image: url({{ asset('assets/healthcare-medical-symbol-c4g11g7l1o1hev4m.jpg') }} );
        }
    </style>

</head>

<body>
    <main>
        <div class="home">
            <div>
                <img src="{{ asset('assets/Logo.png') }}" alt="" srcset="">
            </div>
            <header>
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
        </div>

    </main>
</body>

</html>
