@extends('nav_Med')
@section('app')
    <div class="form">
        <h1>Formulaire gestion des fiches examens</h1>
        <form action="{{ url('Fiche_Examen') }}" method="post">
            {!! csrf_field() !!}
            <div>
                <label>La date d'examen</label></br>
                <input type="text" name="date_examen" id="date_examen" class="form-control"></br>
            </div>
            <div>
                <label>Résultat</label></br>
                <input type="text" name="resultat" id="resultat" class="form-control"></br>
            </div>

            <input type="submit" value="valider" class="btn btn-success"></br>
        </form>
    </div>
@endsection
