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
                        <h1>Formulaire Gestion Des Fiches Patients</h1>

                        <form action="{{ url('Fiche_Patient/' . $fiche_patients->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method('PATCH')
                            <input type="hidden" name="id" id="id" value="{{ $fiche_patients->id }}"
                                id="id" />
                            <label>Nom patient</label></br>
                            <input type="text" name="nom_pat" id="nom_pat" value="{{ $fiche_patients->nom_pat }}"
                                class="form-control"></br>
                            <label>Prénom patient</label></br>
                            <input type="text" name="prenom_pat" id="prenom_pat"
                                value="{{ $fiche_patients->prenom_pat }}" class="form-control"></br>
                            <label>Date de naissance</label></br>
                            <input type="text" name="date_naiss" id="date_naiss"
                                value="{{ $fiche_patients->date_naiss }}" class="form-control"></br>
                            <label>Sexe</label></br>
                            <input type="text" name="sexe" id="sexe" value="{{ $fiche_patients->sexe }}"
                                class="form-control"></br>

                            <label>Adresse</label></br>
                            <input type="text" name="adresse" id="adresse" value="{{ $fiche_patients->adresse }}"
                                class="form-control"></br>
                            <label>Tél</label></br>
                            <input type="text" name="telephone" id="telephone" value="{{ $fiche_patients->telephone }}"
                                class="form-control"></br>
                            <label>Groupe de Sang</label></br>
                            <input type="text" name="group_sang" id="group_sang"
                                value="{{ $fiche_patients->group_sang }}" class="form-control"></br>

                            <input type="submit" value="Update" class="btn btn-success"></br>
                        </form>
                    </div>
                @endsection
