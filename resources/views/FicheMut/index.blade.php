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

    <h2> Gestion des Fiches Mutuelle</h2>
    <button type="button" class="btn btn-primary">
        <a href="{{ url('/FicheMut/create') }}"  title="Add New Fiche Mutuelle">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
    </button>
    <table class="table">
        <thead>

            <th>Nom patient</th>
            <th>Prénom patient</th>
            <th>Nom médecin</th>
            <th>Prénom médecin</th>
            <th>Date de Soins</th>
            <th>Code Mutuelle</th>
            <th>Montant Total</th>
            <th>Montant Mutuelle</th>

        </thead>

        <tbody>
            @foreach ($fiche_muts as $item)
                <tr>

                    <td>{{ $item->nom_pat }}</td>
                    <td>{{ $item->prenom_pat }}</td>
                    <td>{{ $item->nom_med }}</td>
                    <td>{{ $item->prenom_med }}</td>
                    <td>{{ $item->date_soins }}</td>
                    <td>{{ $item->code_mut }}</td>
                    <td>{{ $item->montant_total }}</td>
                    <td>{{ $item->montant_total }}</td>
                    <td>
                        <a href="{{ url('/FicheMut/' . $item->id) }}" title="View Fiche Mutuelle"><button
                                class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                View</button></a>
                        <a href="{{ url('/FicheMut/' . $item->id . '/edit') }}" title="Edit Fiche du Patient"><button
                                class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Edit</button></a>
                        <form method="POST" action="{{ url('/FicheMut' . '/' . $item->id) }}" accept-charset="UTF-8"
                            style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Fiche Mutuelle"
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
