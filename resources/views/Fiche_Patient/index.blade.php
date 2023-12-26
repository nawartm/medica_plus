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

        <h2> Gestion des Fiches Patients</h2>
        <button type="button" class="btn btn-primary">
            <a href="{{ url('/Fiche_Patient/create') }}" title="Add New Fiche du Patient">
                <i class="fa fa-plus" aria-hidden="true"></i> ajouter nouveau patient
            </a>
        </button>

        <table class="table">
            <thead>


                <th class="table-primary">Nom patient</th>
                <th class="table-primary">Prénom patient</th>
                <th class="table-primary">Date de naissance</th>
                <th class="table-primary">le genere</th>
                <th class="table-primary">Adresse</th>
                <th class="table-primary">Tél</th>
                <th class="table-primary">Groupe sanguin</th>
                <th class="table-primary">Opérations</th>

            </thead>
            <tbody>
                @foreach ($fiche_patients as $item)
                    <tr>

                        <td>{{ $item->nom_pat }}</td>
                        <td>{{ $item->prenom_pat }}</td>
                        <td>{{ $item->date_naiss }}</td>
                        <td>{{ $item->sexe }}</td>
                        <td>{{ $item->adresse }}</td>
                        <td>{{ $item->telephone }}</td>
                        <td>{{ $item->group_sang }}</td>
                        <td>
                            <a href="{{ url('/Fiche_Patient/' . $item->id) }}" title="View Fiche du Patient"><button
                                    class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                    voir</button></a>
                            <a href="{{ url('/Fiche_Patient/' . $item->id . '/edit') }}"
                                title="Edit Fiche du Patient"><button class="btn btn-primary btn-sm"><i
                                        class="fa fa-pencil-square-o" aria-hidden="true"></i> modifier</button></a>
                            <form method="POST" action="{{ url('/Fiche_Patient' . '/' . $item->id) }}"
                                accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Fiche du Patient"
                                    onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                        aria-hidden="true"></i> supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

@endsection
