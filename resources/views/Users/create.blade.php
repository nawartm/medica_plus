@extends('nav_Med')

@section('app')
    <section>
        <div class="form">

            <form method="POST" action="{{ route('users.store') }}">
                @csrf
                <div class="top-title">
                    <h3>S'inscrire</h3>
                    <a href="{{ route('login') }}">Se connencter ?</a>
                </div>

                <label for="name">{{ __('Nom complet') }}</label>

                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="email">{{ __(' Addresse email ') }}</label>

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="role">{{ __(' Role ') }}</label>

                <select name="role" id="role">
                    <option value="admin">Admin</option>
                    <option value="doctor">Doctor</option>
                    <option value="assistant">Assistant</option>
                </select>
                @error('role')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="password">{{ __('Mot de passe') }}</label>

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="password-confirm">{{ __('Confirmer le mot de pass') }}</label>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">


                <input type="submit" value="Créer" class="btn btn-success">
            </form>
        </div>
    </section>
@endsection
