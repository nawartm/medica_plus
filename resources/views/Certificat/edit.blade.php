@extends('nav_Med')
@section('app')
    <div class="form">
        <h1>Formulaire gestion des certificats</h1></br>
        <form action="{{ url('Certificat/' . $certificats->id) }}" method="post">
            {!! csrf_field() !!}
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{ $certificats->id }}" id="id" />
            <div>
                <label>Nom patient</label></br>
                <input type="text" name="nom_pat" id="nom_pat" value="{{ $certificats->nom_pat }}"
                    class="form-control"></br>
                @error('nom_pat')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label>Prénom patient</label></br>
                <input type="text" name="prenom_pat" id="prenom_pat" value="{{ $certificats->prenom_pat }}"
                    class="form-control"></br>
                @error('prenom_pat')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label>Nom médecin</label></br>
                <input type="text" name="nom_med" id="nom_med" value="{{ $certificats->nom_med }}"
                    class="form-control"></br>
                @error('nom_med')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label>Prénom médecin</label></br>
                <input type="text" name="prenom_med" id="prenom_med" value="{{ $certificats->prenom_med }}"
                    class="form-control"></br>
                @error('prenom_med')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label>Date</label></br>
                <input type="text" name="date" id="date" value="{{ $certificats->date }}"
                    class="form-control"></br>
                @error('date')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label>heure</label></br>
                <input type="text" name="heure" id="heure" value="{{ $certificats->heure }}"
                    class="form-control"></br>
                @error('heure')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label>Durée</label></br>
                <input type="text" name="dure" id="dure" value="{{ $certificats->dure }}"
                    class="form-control"></br>
                @error('dure')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <input type="submit" value="Valider" class="btn btn-success"></br>
        </form>
    </div>
@endsection
