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
        <h1>Formulaire gestion des fiches patients</h1><br>

        <form action="{{ url('Fiche_Patient/' . $fiche_patients->id) }}" method="post">
            {!! csrf_field() !!}
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{ $fiche_patients->id }}" id="id" />
            <div>
                <label>Nom patient</label><br>
                <input type="text" name="nom_pat" id="nom_pat" value="{{ $fiche_patients->nom_pat }}"
                    ><br>
            </div>
            <div>
                <label>Prénom patient</label><br>
                <input type="text" name="prenom_pat" id="prenom_pat" value="{{ $fiche_patients->prenom_pat }}"
                    ><br>
            </div>
            <div>
                <label>La date de naissance</label><br>
                <input type="text" name="date_naiss" id="date_naiss" value="{{ $fiche_patients->date_naiss }}"
                    ><br>
            </div>
            <div>
                <label>Le genre</label><br>
                <input type="text" name="sexe" id="sexe" value="{{ $fiche_patients->sexe }}"
                    ><br>
            </div>
            <div>

                <label>Adresse</label><br>
                <input type="text" name="adresse" id="adresse" value="{{ $fiche_patients->adresse }}"
                    ><br>
            </div>
            <div>

                <label>Tél</label><br>
                <input type="text" name="telephone" id="telephone" value="{{ $fiche_patients->telephone }}"
                    ><br>
            </div>
            <div>

                <label>Groupe sanguin</label><br>
                <input type="text" name="group_sang" id="group_sang" value="{{ $fiche_patients->group_sang }}"
                    ><br>
            </div>

            <input type="submit" value="valider" class="btn btn-success"><br>
        </form>
    </div>
@endsection
