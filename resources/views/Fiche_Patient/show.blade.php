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

    <div class="container-fluid mb-5 ">
        <div id='sectionAimprimer'>
            <div class="container-fluid mt-5 mb-5">

                <div class="row border border-dark ">

                    <p class="card-title">Nom patient : {{ $fiche_patients->nom_pat }}</p>
                    <p class="card-text">Prénom patient : {{ $fiche_patients->prenom_pat }}</p>
                    <p class="card-text">Date de Naissance : {{ $fiche_patients->date_naiss }}</p>
                    <p class="card-text">Sexe : {{ $fiche_patients->sexe }}</p>
                    <p class="card-text">Adresse : {{ $fiche_patients->adresse }}</p>
                    <p class="card-text">Tél : {{ $fiche_patients->telephone }}</p>
                    <p class="card-text">Groupe de Sang : {{ $fiche_patients->group_sang }}</p>
                </div>

            </div>
        </div>
        <button type="button" class="btn btn-warning" id="load2" style="color:white;"
            data-loading-text=" Processing Order"><i class='fa fa-spinner fa-spin text-light '></i><a href="#"
                onClick="imprimer('sectionAimprimer')" class="btn btn-sm ms-2">Imprimer</a>
            <script>
                function imprimer(divName) {
                    var printContents = document.getElementById(divName).innerHTML;
                    var originalContents = document.body.innerHTML;
                    document.body.innerHTML = printContents;
                    window.print();
                    document.body.innerHTML = originalContents;
                }
            </script>
        </button>
    </div>
    @endsection
