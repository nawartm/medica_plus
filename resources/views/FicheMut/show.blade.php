@extends('nav_Med')
@section('app')
    <section>
        <div id='sectionAimprimer'>
            <div >
                <div >
                    <div >
                        <h3>Docteur {{ $fiche_muts->nom_med }} {{ $fiche_muts->prenom_med }}</h3><br />
                        <h3>Médecin général</h3>
                        <h3 class="fs-6 text-black-50 ">Diplomé de la faculté de medcine à Fes</h3>
                        <h3>Mr/Mm {{ $fiche_muts->nom_pat }}
                            {{ $fiche_muts->prenom_pat }}
                        </h3>
                    </div>

                    <br>


                    <p>Date de Soin: {{ $fiche_muts->date_soins }}</p>
                    <p>Code Mutuelle : {{ $fiche_muts->code_mut }}</p>
                    <p>Montant Total : {{ $fiche_muts->montant_total }}</p>
                    <p>Montant Mutuelle : {{ $fiche_muts->montant_mut }}</p><br><br><br>


                </div>

            </div>
            <div class="col-sm bg-white float-end fs-6 p-5 pe-5 ps-0">
                <h3> quartier daraa</h3>
                <h3> zagora</h3>
                <h3> Tel:05.78.45.94.76</h3>
                <h3> Tel:06.98.23.91.86</h3>
            </div>
        </div>
        <button type="button" class="btn btn-dark-green" id="load2" style="color:white;"> <a href="#"
                onClick="imprimer('sectionAimprimer')" class="btn btn-dark-green ">imprimer
            </a>

            </div>
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
