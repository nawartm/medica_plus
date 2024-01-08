@extends('nav_Med')
@section('app')
    <section>
        <tr>
            <td>{{ $consultation->id }}</td>
            <td>{{ $consultation->nom_pat }}</td>
            <td>{{ $consultation->prenom_pat }}</td>
            <td>{{ $consultation->nom_med }}</td>
            <td>{{ $consultation->prenom_med }}</td>
            <td>{{ $consultation->motif }}</td>
            <td>{{ $consultation->taille }}</td>
            <td>{{ $consultation->pois }}</td>
            <td>{{ $consultation->tension }}</td>
            <td>{{ $consultation->temperatur }}</td>
            <td>{{ $consultation->examen }}</td>
            <td>{{ $consultation->conclusion }}</td>
            <td>{{ $consultation->date }}</td>
            <td>{{ $consultation->heure }}</td>
    </section>
@endsection
