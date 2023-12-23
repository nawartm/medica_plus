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
                        <h1>Formulaire Gestion des Fiches Mutuelle</h1>


                        <form action="{{ url('FicheMut') }}" method="post">
                            {!! csrf_field() !!}
                            <label>Nom patient</label></br>
                            <input type="text" name="nom_pat" id="nom_pat" class="form-control"></br>
                            <label>Prénom patient</label></br>
                            <input type="text" name="prenom_pat" id="prenom_pat" class="form-control"></br>
                            <label>Nom de médecin</label></br>
                            <input type="text" name="nom_med" id="nom_med" class="form-control"></br>
                            <label>Prénom médecin</label></br>
                            <input type="text" name="prenom_med" id="prenom_med" class="form-control"></br>
                            <label>Date de Soins</label></br>
                            <input type="text" name="date_soins" id="date_soins" class="form-control"></br>
                            <label>Code Mutuelle</label></br>
                            <input type="text" name="code_mut" id="code_mut" class="form-control"></br>
                            <label>Montant Total</label></br>
                            <input type="text" name="montant_total" id="montant_total" class="form-control"></br>
                            <label>Montant Mutuelle</label></br>
                            <input type="text" name="montant_mut" id="montant_mut" class="form-control"></br>

                            <input type="submit" value="Save" class="btn btn-success"></br>
                        </form>
                    </div>
                @endsection
