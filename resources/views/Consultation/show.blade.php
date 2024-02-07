@extends('nav_Med')
@section('app')
    <section>
        <div id="sectionAimprimer">
            <h3>Cabinet Medical </h3><br />

            <div>
                <h3>ID: {{ $consultation->id }}</h3>
                <h3>Patient Name: {{ $consultation->nom_pat }} {{ $consultation->prenom_pat }}</h3>
                <h3>Doctor Name: {{ $consultation->nom_med }} {{ $consultation->prenom_med }}</h3>
                <h3>Motif: {{ $consultation->motif }}</h3>
                <h3>Size: {{ $consultation->taille }}</h3>
                <h3>Weight: {{ $consultation->pois }}</h3>
                <h3>Tension: {{ $consultation->tension }}</h3>
                <h3>Temperature: {{ $consultation->temperatur }}</h3>
                <h3>Examination: {{ $consultation->examen }}</h3>
                <h3>Conclusion: {{ $consultation->conclusion }}</h3>
                <h3>Date: {{ $consultation->date }}</h3>
                <h3>Time: {{ $consultation->heure }}</h3>
            </div>
        </div>
        <button type="button" class="btn btn-dark-green" id="load2" style="color:white;"> <a href="#"
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
