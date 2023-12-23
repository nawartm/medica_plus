@extends('nav_Med')
@section('app')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class=" mt-5 container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-6 col-lg-8">
                <div class="mx-3 me-5 ">
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
                        <form action="{{ url('Certificat/' . $certificats->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method('PATCH')
                            <input type="hidden" name="id" id="id" value="{{ $certificats->id }}"
                                id="id" />
                            <label>Nom patient</label></br>
                            <input type="text" name="nom_pat" id="nom_pat" value="{{ $certificats->nom_pat }}"
                                class="form-control"></br>
                            <label>Prénom patient</label></br>
                            <input type="text" name="prenom_pat" id="prenom_pat" value="{{ $certificats->prenom_pat }}"
                                class="form-control"></br>
                            <label>Nom medecin</label></br>
                            <input type="text" name="nom_med" id="nom_med" value="{{ $certificats->nom_med }}"
                                class="form-control"></br>
                            <label>Prénom medecin</label></br>
                            <input type="text" name="prenom_med" id="prenom_med" value="{{ $certificats->prenom_med }}"
                                class="form-control"></br>

                            <label>Date</label></br>
                            <input type="text" name="date" id="date" value="{{ $certificats->date }}"
                                class="form-control"></br>
                            <label>heure</label></br>
                            <input type="text" name="heure" id="heure" value="{{ $certificats->heure }}"
                                class="form-control"></br>
                            <label>Durée</label></br>
                            <input type="text" name="dure" id="dure" value="{{ $certificats->dure }}"
                                class="form-control"></br>

                            <input type="submit" value="Update" class="btn btn-success"></br>
                        </form>
                    </div>
                @endsection
