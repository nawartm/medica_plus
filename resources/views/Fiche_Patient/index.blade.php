@extends('nav_Med')
@section('app')
    <section>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h2> Gestion des fiches patients</h2>
        <div style="margin:3em;">
        <button type="button" class="btn btn-primary">
            <a href="{{ url('/Fiche_Patient/create') }}" title="Add New Fiche du Patient">
                <i class="fa fa-plus" aria-hidden="true"></i> Ajouter
            </a>
        </button>
        </div>
        <table class="table">
            <thead>


                <th >Nom patient</th>
                <th >Prénom patient</th>
                <th >La date de naissance</th>
                <th >Le genre</th>
                <th >Adresse</th>
                <th >Tél</th>
                <th >Groupe sanguin</th>
                <th >Opérations</th>

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
                                    class="btn"><i class="fa fa-eye" aria-hidden="true"></i>
                                    </button></a>
                            <a href="{{ url('/Fiche_Patient/' . $item->id . '/edit') }}"
                                title="Edit Fiche du Patient"><button class="btn btn-success a"><i
                                        class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                            <form method="POST" action="{{ url('/Fiche_Patient' . '/' . $item->id) }}"
                                accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger a" title="Delete Fiche du Patient"
                                    onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                        aria-hidden="true"></i> Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

@endsection
