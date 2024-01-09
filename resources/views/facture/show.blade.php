@extends('nav_Med')
@section('app')
<section>
    <div>
        <h3>Cabinet Medical </h3><br />

        <h3 class="">Mr/Mm {{ $factures->nom_pat }} {{ $factures->prenom_pat }}</h3>
    </div>

    <br>
    <p>Date : {{ $factures->date }}</p>
    <p>Nom du patient : {{ $factures->nom_pat }}</p>
    <p>Prénom du patient : {{ $factures->prenom_pat }}</p>

    <p>Tarif de consultation :{{ $factures->tarif_cns }}</p>
    </div>
    </div>
    <div >
        <h3 > quarier daraa</h3>
        <h3 >zagora</h3>
        <h3 >Tel:05.78.45.94.76</h3>
        <h3 >Tel:06.98.23.91.86</h3>
    </div>
    </div>
    <button type="button" class="btn btn-primary" id="load2" style="color:white;"
        data-loading-text=" Processing Order"><i class='fa fa-spinner fa-spin text-light '></i><a href="#"
            onClick="imprimer('sectionAimprimer')" class="btn btn-sm ms-2">Imprimer</a>
</section>
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
