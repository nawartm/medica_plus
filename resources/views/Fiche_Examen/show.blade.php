@extends('nav_Med')
@section('app')

        <div class="container-fluid mb-5 ">
            <div id='sectionAimprimer'>
                <div class="container-fluid mt-5 mb-5">

                    <div class="row border border-dark ">
                        <div class="col-sm bg-white float-start  p-4 ps-5 pe-0" style=" color:white;">
                            <h3>Laboratoire daraa</h3><br />

                        </div>
                        <div class="col-sm bg-white float-end fs-6 p-5 pe-5 ps-0">
                            <h3 class="fs-6 text-black-50"> quartier daraa</h3>
                            <h3 class="fs-6 text-black-50"> zagora</h3>
                            <h3 class="fs-6 text-black-50"> Tel:05.78.45.94.76</h3>
                            <h3 class="fs-6 text-black-50"> Tel:06.98.23.91.86</h3>
                        </div>
                        <br>
                        <h3 class="float-end fs-6 text-black-50">Date Examen : {{ $fiche_examens->date_examen }}</h3>



                        <p name="" id="" cols="200" rows="10"> Résultat :
                            {{ $fiche_examens->resultat }}</p><br><br><br><br><br>

                    </div>

                </div>
            </div>
            <button type="button" class="btn btn-warning btn-lg float-sm-end" id="load2" style="color:white;"
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

        </div>
        </button>
@endsection
