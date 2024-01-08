@extends('nav_Med')
@section('app')
    <section>
        <tr>
            <td>{{ $Impayee->id }}</td>
            <td>{{ $Impayee->nom_pat }}</td>
            <td>{{ $Impayee->prenom_pat }}</td>
            <td>{{ $Impayee->tel_pat }}</td>
            <td>{{ $Impayee->montant_APS }}</td>
            <td>{{ $Impayee->montant_RS }}</td>
    </section>
@endsection
