@extends('nav_Med')
@section('app')
    <section>
        <h2>Gestion des Fiches D'examen</h2>

        <button type="button" class="btn btn-primary">
            <a href="{{ url('/Fiche_Examen/create') }}" title="Add New Fiche Examen">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
        </button>

        <table class="table">
            <thead>



                <th class="table-primary">Date Examen</th>
                <th class="table-primary">Résultat</th>


            </thead>
            <tbody>
                @foreach ($fiche_examens as $item)
                    <tr>

                        <td>{{ $item->date_examen }}</td>
                        <td>{{ $item->resultat }}</td>

                        <td>
                            <a href="{{ url('/Fiche_Examen/' . $item->id) }}" title="View Fiche Examen"><button
                                    class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                    View</button></a>
                            <a href="{{ url('/Fiche_Examen/' . $item->id . '/edit') }}" title="Edit Fiche Examen"><button
                                    class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    Edit</button></a>
                            <form method="POST" action="{{ url('/Fiche_Examen' . '/' . $item->id) }}"
                                accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Fiche Examen"
                                    onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                        aria-hidden="true"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
