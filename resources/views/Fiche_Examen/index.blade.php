@extends('nav_Med')
@section('app')
    <section>
        <h2>Gestion des fiches d'examens</h2>
        <div style="margin:3em;">

        <button type="button" class="btn btn-primary">
            <a href="{{ url('/Fiche_Examen/create') }}" title="Add New Fiche Examen">
                <i class="fa fa-plus" aria-hidden="true"></i> Ajouter
            </a>
        </button>
    </div>

        <table class="table">
            <thead>



                <th class="table-primary">La date d'examen</th>
                <th class="table-primary">Résultat</th>
                <th class="table-primary">Opérations </th>

            </thead>
            <tbody>
                @foreach ($fiche_examens as $item)
                    <tr>

                        <td>{{ $item->date_examen }}</td>
                        <td>{{ $item->resultat }}</td>

                        <td>
                            <a href="{{ url('/Fiche_Examen/' . $item->id) }}" title="View Fiche Examen"><button
                                    class="btn"><i class="fa fa-eye" aria-hidden="true"></i>
                                    </button></a>
                            <a href="{{ url('/Fiche_Examen/' . $item->id . '/edit') }}" title="Edit Fiche Examen"><button
                                class="btn btn-success a"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    Modifier</button></a>
                            <form method="POST" action="{{ url('/Fiche_Examen' . '/' . $item->id) }}"
                                accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger a" title="Delete Fiche Examen"
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
