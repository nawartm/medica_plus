@extends('nav_Med')
@section('app')
    <section>

            <td>{{ $RDV['id'] }}</td>
            <td>{{ $RDV['nom_pat'] }}</td>
            <td>{{ $RDV['prenom_pat'] }}</td>
            <td>{{ $RDV['tel_pat'] }}</td>
            <td>{{ $RDV['date'] }}</td>
            <td>{{ $RDV['heure'] }}</td>
    </section>
@endsection
