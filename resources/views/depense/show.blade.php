@extends('nav_Med')
@section('app')
    <h3>Cabinet Medical </h3><br />

    <div>
        <h3 >Quartier daraa</h3>
        <h3 >Zagora</h3>
        <h3 >Tel:05.78.45.94.76</h3>
        <h3 >Tel:06.98.23.91.86</h3>
    </div>
    <br>
    <p class="card-title">La date : {{ $depense->mois_dep }}</p>
    <p class="card-text">Nom du patient : {{ $depense->motif_dep }}</p>
    <p class="card-text">Prénom du patient : {{ $depense->montant_dep }}</p>
    <button type="button" class="btn btn-warning btn-lg float-sm-end" id="load2" style="color:white;"
         > <a href="#"
            onClick="imprimer('sectionAimprimer')" class="btn btn-dark-green ">Imprimer</a>
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
@endsection
