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
        <h1>Formulaire Gestion des Fiches Patients</h1>
        <form action="{{ url('Fiche_Patient') }}" method="post">
            {!! csrf_field() !!}
            <div>
                <label>Nom patient</label></br>
                <input type="text" name="nom_pat" id="nom_pat" class="form-control"></br>
            </div>
            <div>
                <label>Prénom patient</label></br>
                <input type="text" name="prenom_pat" id="prenom_pat" class="form-control"></br>
            </div>
            <div>
                <label>Date de naissance</label></br>
                <input type="text" name="date_naiss" id="date_naiss" class="form-control"></br>
            </div>
            <div>
                <label>Sexe</label></br>
                <input type="text" name="sexe" id="sexe" class="form-control"></br>
            </div>
            <div>
                <label>Adresse</label></br>
                <input type="text" name="adresse" id="adresse" class="form-control"></br>
            </div>
            <div>
                <label>Tél</label></br>
                <input type="text" name="telephone" id="telephone" class="form-control"></br>
            </div>
            <div>
                <label>Groupe de Sang</label></br>
                <input type="text" name="group_sang" id="group_sang" class="form-control"></br>
            </div>

            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    </div>
@endsection
