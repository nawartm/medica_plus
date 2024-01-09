@extends('nav_Med')
@section('app')
    <section>
        <tr>
            <td>{{ $Impayee->id }}</td><br>
            <td>{{ $Impayee->nom_pat }}</td><br>
            <td>{{ $Impayee->prenom_pat }}</td><br>
            <td>{{ $Impayee->tel_pat }}</td><br>
            <td>{{ $Impayee->montant_APS }}</td><br>
            <td>{{ $Impayee->montant_RS }}</td><br>
    </section>
@endsection
