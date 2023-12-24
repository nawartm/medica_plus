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
    <div class="container">
        <h1>Formulaire Gestion des Certificats</h1>
        <form action="{{ url('Certificat') }}" method="post">
            {!! csrf_field() !!}
            <label>Nom patient</label></br>
            <input type="text" name="nom_pat" id="nom_pat" class="form-control"></br>
            <label>Prénom patient</label></br>
            <input type="text" name="prenom_pat" id="prenom_pat" class="form-control"></br>
            <label>Nom medecin</label></br>
            <input type="text" name="nom_med" id="nom_med" class="form-control"></br>
            <label>Prénom medcin</label></br>
            <input type="text" name="prenom_med" id="prenom_med" class="form-control"></br>
            <label>date</label></br>
            <input type="text" name="date" id="date" class="form-control"></br>
            <label>heure</label></br>
            <input type="text" name="heure" id="heure" class="form-control"></br>
            <label>durée</label></br>
            <input type="text" name="dure" id="dure" class="form-control"></br>

            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    </div>
@endsection
