@extends('nav_Med')
@section('app')
    <div class="form">
        <h1>Formulaire gestion des certificats</h1></br>
        <form action="{{ route('Certificat.store') }}" method="post">
            {!! csrf_field() !!}
            <div>
                <label>Nom patient</label></br>
                <input type="text" name="nom_pat" id="nom_pat" class="form-control">
                @error('nom_pat')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label>Prénom patient</label></br>
                <input type="text" name="prenom_pat" id="prenom_pat" class="form-control">
                @error('prenom_pat')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label>Nom médecin</label></br>
                <input type="text" name="nom_med" id="nom_med" class="form-control">
                @error('nom_med')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label>Prénom médecin</label></br>
                <input type="text" name="prenom_med" id="prenom_med" class="form-control">
                @error('prenom_med')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label>La date</label></br>
                <input type="date" name="date" id="date" class="form-control">
                @error('date')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label>L'heure</label></br>
                <input type="text" name="heure" id="heure" class="form-control">
                @error('heure')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label>La durée</label></br>
                <input type="text" name="dure" id="dure" class="form-control">
                @error('dure')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <input type="submit" value="valider" class="btn btn-success">
        </form>
    </div>
@endsection
