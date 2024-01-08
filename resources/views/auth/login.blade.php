@extends('nav_Med')

@section('app')
    <div></div>
    <div class="form">

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="top-title">
                <h3>Connectez-vous</h3>
                <a href="{{ route('register') }}">Enregistrez-vous ?</a>
            </div>
            <label for="email">{{ __('Addresse email') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="remember">

                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Enregistrer le mot de passe') }}
                </label>

            </div>
            <input type="submit" value="Se connecter" class="btn btn-success">


            @if (Route::has('password.request'))
                <a class="forgot" href="{{ route('password.request') }}">Mot de passe oublié?</a>
            @endif
        </form>
    </div>
@endsection
