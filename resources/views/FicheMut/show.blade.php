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

                    <div class="container-fluid mb-5 ">
                        <div id='sectionAimprimer'>
                            <div class="container-fluid mt-5 mb-5">

                                <div class="row border border-dark ">
                                    <div class="col-sm bg-white float-start  p-4 ps-5 pe-0" style=" color:white;">
                                        <h3>Docteur {{ $fiche_muts->nom_med }} {{ $fiche_muts->prenom_med }}</h3><br />
                                        <h3 class="fs-6 text-black-50">Medecin general</h3>
                                        <h3 class="fs-6 text-black-50 ">Diplomé de la faculté de medcine à Fes</h3>
                                        <h3 class="fs-6 text-black-50">Mr/Mm {{ $fiche_muts->nom_pat }}
                                            {{ $fiche_muts->prenom_pat }}
                                        </h3>
                                    </div>
                                    <div class="col-sm bg-white float-end fs-6 p-5 pe-5 ps-0">
                                        <h3 class="fs-6 text-black-50"> 885 Rue Nour</h3>
                                        <h3 class="fs-6 text-black-50"> Meknes Ouislan</h3>
                                        <h3 class="fs-6 text-black-50"> Tel:05.78.45.94.76</h3>
                                        <h3 class="fs-6 text-black-50"> Tel:06.98.23.91.86</h3>
                                    </div>
                                    <br>


                                    <p class="card-text">Date de Soins : {{ $fiche_muts->date_soins }}</p>
                                    <p class="card-text">Code Mutuelle : {{ $fiche_muts->code_mut }}</p>
                                    <p class="card-text">Montant Total : {{ $fiche_muts->montant_total }}</p>
                                    <p class="card-text">Montant Mutuelle : {{ $fiche_muts->montant_mut }}</p><br><br><br>


                                </div>

                            </div>
                        </div>
                        <button type="button" class="btn btn-warning btn-lg float-sm-end" id="load2"
                            style="color:white;" data-loading-text=" Processing Order"><i
                                class='fa fa-spinner fa-spin text-light '></i><a href="#"
                                onClick="imprimer('sectionAimprimer')" class="btn btn-sm ms-2">Envoyer au Bureau
                                Mutuelle</a>
                            <script>
                                function imprimer(divName) {
                                    var printContents = document.getElementById(divName).innerHTML;
                                    var originalContents = document.body.innerHTML;
                                    document.body.innerHTML = printContents;
                                    window.print();
                                    document.body.innerHTML = originalContents;
                                }
                            </script>

                    </div>
                    </button>
                @endsection
