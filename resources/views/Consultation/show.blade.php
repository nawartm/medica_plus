@extends('nav_Med')
@section('app')
    <section>
        <tr>
            <td>{{ $consultation->id }}</td><br/>
            <td>{{ $consultation->nom_pat }}</td><br/>
            <td>{{ $consultation->prenom_pat }}</td><br/>
            <td>{{ $consultation->nom_med }}</td><br/>
            <td>{{ $consultation->prenom_med }}</td><br/>
            <td>{{ $consultation->motif }}</td><br/>
            <td>{{ $consultation->taille }}</td><br/>
            <td>{{ $consultation->pois }}</td><br/>
            <td>{{ $consultation->tension }}</td><br/>
            <td>{{ $consultation->temperatur }}</td><br/>
            <td>{{ $consultation->examen }}</td><br/>
            <td>{{ $consultation->conclusion }}</td><br/>
            <td>{{ $consultation->date }}</td><br/>
            <td>{{ $consultation->heure }}</td><br/>
    </section>
@endsection
