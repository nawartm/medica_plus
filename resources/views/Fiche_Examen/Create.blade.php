@extends('nav_Med')
@section('app')
    <div class="container">
        <h1>Formulaire Gestion des Fiches Examen</h1>
        <form action="{{ url('Fiche_Examen') }}" method="post">
            {!! csrf_field() !!}
            <label>Date d'examen</label></br>
            <input type="text" name="date_examen" id="date_examen" class="form-control"></br>
            <label>Résultat</label></br>
            <input type="text" name="resultat" id="resultat" class="form-control"></br>

            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    </div>
@endsection
