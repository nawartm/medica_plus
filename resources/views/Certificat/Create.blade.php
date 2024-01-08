@extends('nav_Med')
@section('app')
    @if ($errors->any())
        <div class="alert alert-danger col-8 offset-2">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form">
        <h1>Formulaire gestion des certificats</h1>
        <form action="{{ url('Certificat') }}" method="post">
            {!! csrf_field() !!}
            <div>
                <label>Nom patient</label></br>
                <input type="text" name="nom_pat" id="nom_pat" class="form-control">
            </div>
            <div>
                <label>Prénom patient</label></br>
                <input type="text" name="prenom_pat" id="prenom_pat" class="form-control">
            </div>
            <div>
                <label>Nom médecin</label></br>
                <input type="text" name="nom_med" id="nom_med" class="form-control">
            </div>
            <div>
                <label>Prénom médecin</label></br>
                <input type="text" name="prenom_med" id="prenom_med" class="form-control">
            </div>
            <div>
                <label>La date</label></br>
                <input type="text" name="date" id="date" class="form-control">
            </div>
            <div>
                <label>L'heure</label></br>
                <input type="text" name="heure" id="heure" class="form-control">
            </div>
            <div>
                <label>La durée</label></br>
                <input type="text" name="dure" id="dure" class="form-control">
            </div>

            <input type="submit" value="valider" class="btn btn-success">
        </form>
    </div>
@endsection
