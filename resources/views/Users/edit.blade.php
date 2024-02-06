@extends('nav_Med')

@section('app')
    <section>
        <div class="form">
            <form method="POST" action="{{ route('users.update', $user->id) }}">
                @csrf
                @method('PUT')

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}"
                    required>

                <label for="role">Role:</label>
                <select id="role" name="role" class="form-control" required>
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="doctor" {{ $user->role == 'doctor' ? 'selected' : '' }}>Doctor</option>
                    <option value="secretaire" {{ $user->role == 'secretaire' ? 'selected' : '' }}>Secretaire</option>
                </select>
                @error('role')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" >

                <input type="submit" value="Update" class="btn btn-success">
            </form>
        </div>
    </section>
@endsection
