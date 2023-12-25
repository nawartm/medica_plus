@extends('nav_Med')

@section('app')
    <div></div>
    <div class="form">

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="top-title">
                <h3>Log In</h3>
                <a href="{{ route('register') }}">Register ?</a>
            </div>
            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

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
                    {{ __('Remember Me') }}
                </label>

            </div>
            <input type="submit" value="login" class="btn btn-primary">


            @if (Route::has('password.request'))
                <a class="forgot" href="{{ route('password.request') }}">Forgot Password?</a>
            @endif
        </form>
    </div>
@endsection
