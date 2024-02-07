@extends('nav_Med')
@section('app')
    <section>
        <div id="sectionAimprimer">
            <div>
                <div class="row border border-dark ">
                    <div class="col-sm bg-white float-start  p-4 ps-5 pe-0">
                        <h3>Docteur {{ $Ordonnance->nom_med }}</h3><br />
                        <h3 class="fs-6 text-black-50">Médecin général</h3><br/>
                        <h3 class="fs-6 text-black-50 ">Diplomé de la faculté de médecine à Fès</h3><br/>
                        <h3 class="fs-6 text-black-50">Mr/Mm {{ $Ordonnance->nom_pat }} {{ $Ordonnance->prenom_pat }}
                        </h3> <br/>
                    </div>
                    <br>
                    <h3 class="float-end fs-6 text-black-50">{{ $Ordonnance->date }}</h3><br/>

                    <p name="" id="" cols="200" rows="10">Mm/Mr {{ $Ordonnance->nom_pat }}
                        {{ $Ordonnance->prenom_pat }}</p><br><br><br>
                    <p name="" id="" cols="200" rows="10">{{ $Ordonnance->description }}</p><br/>
                    <br>

                </div>

            </div>
            <div class="">
                <h3>quartier daraa</h3>
                <h3>zagora</h3>
                <h3>Tel:05.78.45.94.76</h3>
                <h3>Tel:06.98.23.91.86</h3>
            </div>

        </div>

        <button type="button" onClick="imprimer('sectionAimprimer')" class="btn btn-dark-green" id="load2"
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
