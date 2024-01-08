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
        <h1>Formulaire gestion des fiches patients</h1>
        <form action="{{ url('Fiche_Patient') }}" method="post">
            {!! csrf_field() !!}
            <div>
                <label>Nom patient</label><br>
                <input type="text" name="nom_pat" id="nom_pat" ><br>
            </div>
            <div>
                <label>Prénom patient</label><br>
                <input type="text" name="prenom_pat" id="prenom_pat" ><br>
            </div>
            <div>
                <label> La date de naissance</label><br>
                <input type="date" name="date_naiss" id="date_naiss" ><br>
            </div>
            <div>
                <label>Le genre</label><br>
                <input type="text" name="sexe" id="sexe" ><br>
            </div>
            <div>
                <label>Adresse</label><br>
                <input type="text" name="adresse" id="adresse" ><br>
            </div>
            <div>
                <label>Tél</label><br>
                <input type="tel" name="telephone" id="telephone" ><br>
            </div>
            <div>
                <label>Groupe sanguin</label><br>
                <input type="text" name="group_sang" id="group_sang" ><br>
            </div>

            <input type="submit" value="valider" class="btn btn-success"><br>
        </form>
    </div>
@endsection
