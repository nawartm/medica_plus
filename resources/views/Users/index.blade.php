@extends('nav_Med')
@section('app')
    <section>
        <h1>Gestion des utilisateurs</h1>

        <button type="button" class="btn btn-dark-green" id="load1"  >
            <a href="/users/create" style="color:white">Ajouter</a>
        </button>
        <form action="{{ url('UserSearch') }}" method="post">
            @csrf
            <input type="text" name="search" id="" placeholder="Recherche">
            <button type="submit" class="btn a btn-green">Recherche</button>
        </form>
        <div>
            <table>
                <thead>
                    <tr>
                        <th class="table-primary"> Id </th>
                        <th class="table-secondary"> Nom et prénom </th>
                        <th class="table-success"> Rôle </th>
                        <th class="table-primary"> E-mail </th>
                        <th class="table-warning"> Inscrit à </th>
                        <th class="table-warning"> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>


                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <button type="button" class="btn btn-success" id="load1" style="color:white">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success ps-0 py-0 pe-0">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </button>

                                <button type="button" class="btn btn-danger" id="load1" style="color:white">
                                    <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger ps-0 py-0 pe-0"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </button>

                                <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}"
                                    method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>

    </section>
@endsection
