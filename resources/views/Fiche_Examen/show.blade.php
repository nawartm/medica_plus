@extends('nav_Med')
@section('app')
    <section>
        <div id='sectionAimprimer'>
            <div class="container-fluid mt-5 mb-5">

                <div class="row border border-dark ">
                    <div class="col-sm bg-white float-start  p-4 ps-5 pe-0" style=" color:white;">
                        <h3>Laboratoire daraa</h3><br />

                    </div>

                    <br>
                    <h3 class="float-end fs-6 text-black-50">Date Examen : {{ $fiche_examens->date_examen }}</h3>



                    <p name="" id="" cols="200" rows="10"> Résultat :
                        {{ $fiche_examens->resultat }}</p><br>

                </div>

            </div>
            <div class="col-sm bg-white float-end fs-6 p-5 pe-5 ps-0">
                <h3> Quartier daraa</h3>
                <h3> Zagora</h3>
                <h3> Tel:05.78.45.94.76</h3>
                <h3> Tel:06.98.23.91.86</h3>
            </div>
        </div>
        <button type="button" class="btn btn-dark-green " id="load2" style="color:white;"> <a href="#"
                onClick="imprimer('sectionAimprimer')" class="btn  ">Imprimer</a>
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
    </section>
@endsection
