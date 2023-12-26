@extends('nav_Med')

@section('app')
    <div></div>
    <div class="form">

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="top-title">
                <h3>enregistrez-vous</h3>
                <a href="{{ route('login') }}">connencter-vous ?</a>
            </div>

            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('nom complet') }}</label>

            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __(' Addresse email ') }}</label>

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('mot de passe') }}</label>

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmer le mot de pass') }}</label>

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password">

            <input type="submit" value="se connecter" class="btn btn-primary">
        </form>
    </div>
@endsection
