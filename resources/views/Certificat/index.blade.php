@extends('nav_Med')
@section('app')
    <section>
        @if ($errors->any())
            <div class="alert alert-danger col-8 offset-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h2> Gestion des certificats</h2>
        <div style="margin:3em;" >
        <button type="button" class="btn btn-primary" >
            <a href="{{ url('/Certificat/create') }}" title="Add New Certificat">
                <i class="fa fa-plus" aria-hidden="true"></i> Ajouter
            </a>
        </button>
        </div>
        <table class="table">
            <thead>
                <th class="table-primary">Nom patient</th>
                <th class="table-primary">Prénom patient</th>
                <th class="table-primary">Nom médecin</th>
                <th class="table-primary">Prénom médecin</th>
                <th class="table-primary">La date</th>
                <th class="table-primary">L'heure</th>
                <th class="table-primary">La durée</th>
                <th class="table-primary">Opérations</th>
            </thead>

            <tbody>
                @foreach ($certificats as $item)
                    <tr>

                        <td>{{ $item->nom_pat }}</td>
                        <td>{{ $item->prenom_pat }}</td>
                        <td>{{ $item->nom_med }}</td>
                        <td>{{ $item->prenom_med }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->heure }}</td>
                        <td>{{ $item->dure }}</td>
                        <td>
                            <a href="{{ url('/Certificat/' . $item->id) }}" title="View Certificat"><button
                                    class="btn "><i class="fa fa-eye" aria-hidden="true"></i>
                                   </button></a>
                                   <a href="{{ url('/Certificat/' . $item->id . '/edit') }}" title="Edit Certificat"><button class="btn btn-success a"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><i class="fa-solid fa-pen-to-square"></i></button></a>
                            <form method="POST" action="{{ url('/Certificat' . '/' . $item->id) }}" accept-charset="UTF-8"
                                style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger a" title="Delete Certificat"
                                    onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa-solid fa-trash"></i></button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

@endsection
