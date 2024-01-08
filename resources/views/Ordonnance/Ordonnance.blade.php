@extends('nav_Med')
@section('app')
    <section>
        <div id='sectionAimprimer'>
            <div>
                <div class="" style=" color:#17202A;">
                    <h3>Docteur {{ $Ordonnance->nom_med }}</h3><br />
                    <h3>Médecin général</h3>
                    <h3 class="fs-6 text-black-50 ">Diplomé de la faculté de médecine à Fes</h3>
                    <h3>Mr/Mm {{ $Ordonnance->nom_pat }} {{ $Ordonnance->prenom_pat }}
                    </h3>
                </div>
                <div class="">
                    <h3>quartier daraa</h3>
                    <h3>zagora</h3>
                    <h3>Tel:05.78.45.94.76</h3>
                    <h3>Tel:06.98.23.91.86</h3>
                </div>

                <h3 class="">{{ $Ordonnance->date }}</h3>

                <p name="" id="" cols="200" rows="10">Mm/Mr {{ $Ordonnance->nom_pat }}
                    {{ $Ordonnance->prenom_pat }}</p>
                <p name="" id="" cols="200" rows="10">{{ $Ordonnance->description }}</p>

            </div>
        </div>

        <button type="button" onClick="imprimer('sectionAimprimer')" class="btn btn-primary" id="load2"
            style="color:white;" data-loading-text="Processing Order">
            <i class='fa fa-spinner fa-spin text-light'></i>
            Imprimer
        </button>

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
@endsection
