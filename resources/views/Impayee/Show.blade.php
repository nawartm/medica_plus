@extends('nav_Med')
@section('app')
    <section>
        <div id='sectionAimprimer'>
            <div>
                <div>
                    <div>
                        <h3>ID: {{ $Impayee->id }}</h3><br />
                        <h3>Patient Name: {{ $Impayee->nom_pat }} {{ $Impayee->prenom_pat }}</h3>
                        <h3>Contact: {{ $Impayee->tel_pat }}</h3>
                    </div>

                    <br>

                    <p>Montant APS: {{ $Impayee->montant_APS }}</p>
                    <p>Montant RS: {{ $Impayee->montant_RS }}</p><br><br><br>
                </div>
            </div>
            <div class="col-sm bg-white float-end fs-6 p-5 pe-5 ps-0">
                <h3> quartier daraa</h3>
                <h3> zagora</h3>
                <h3> Tel:05.78.45.94.76</h3>
                <h3> Tel:06.98.23.91.86</h3>
            </div>
        </div>
        <button type="button" class="btn btn-dark-green" id="load2" style="color:white;">
            <a href="#" onClick="imprimer('sectionAimprimer')" class="btn btn-dark-green ">imprimer</a>
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
