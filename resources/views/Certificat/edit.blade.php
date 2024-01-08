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
        <form action="{{ url('Certificat/' . $certificats->id) }}" method="post">
            {!! csrf_field() !!}
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{ $certificats->id }}" id="id" />
            <div>
                <label>Nom patient</label></br>
                <input type="text" name="nom_pat" id="nom_pat" value="{{ $certificats->nom_pat }}"
                class="form-control"></br>
            </div>
            <div>
                <label>Prénom patient</label></br>
                <input type="text" name="prenom_pat" id="prenom_pat" value="{{ $certificats->prenom_pat }}"
                class="form-control"></br>
            </div>
            <div>
                <label>Nom médecin</label></br>
                <input type="text" name="nom_med" id="nom_med" value="{{ $certificats->nom_med }}"
                class="form-control"></br>
            </div>
            <div>
                <label>Prénom médecin</label></br>
                <input type="text" name="prenom_med" id="prenom_med" value="{{ $certificats->prenom_med }}"
                class="form-control"></br>
            </div>
            <div>
                <label>Date</label></br>
                <input type="text" name="date" id="date" value="{{ $certificats->date }}" class="form-control"></br>
            </div>
            <div>
                <label>heure</label></br>
                <input type="text" name="heure" id="heure" value="{{ $certificats->heure }}" class="form-control"></br>
            </div>
            <div>
                <label>Durée</label></br>
                <input type="text" name="dure" id="dure" value="{{ $certificats->dure }}" class="form-control"></br>
            </div>

            <input type="submit" value="modifier" class="btn btn-success"></br>
        </form>
    </div>
@endsection
