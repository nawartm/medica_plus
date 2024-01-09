@extends('nav_Med')
@section('app')
    @if ($errors->any())
        <div class="alert alert-danger col-8 offset-2">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form">
        <h1>Formulaire des Consultations</h1></br>
        <form action="{{ route('Consultation.update', $Consultation->id) }}" method="post" enctype="multipart/form-data">
            <!-- 'enctype' est important car il informe qu' on va envoyer un fichier-->
            @method('PUT')
            @csrf
            <div >
                <label for="exampleFormControlInput1" class="form-label">Nom du patient</label><br>
                <input type="text" class="form-control" name="nom_pat" placeholder="Entrez le nom du patient"
                    value="{{ $Consultation->nom_pat }}">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Prénom du patient</label><br>
                <input type="text" class="form-control" name="prenom_pat" value="{{ $Consultation->prenom_pat }}">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Nom du médecin</label><br>
                <input type="text" class="form-control" name="nom_med" placeholder="Entrez le nom du patient"
                    value="{{ $Consultation->nom_med }}">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Prénom du médecin</label><br>
                <input type="text" class="form-control" name="prenom_med" value="{{ $Consultation->prenom_med }}">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Motif</label><br>
                <input type="text" class="form-control" name="motif" value="{{ $Consultation->motif }} ">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Taille</label><br>
                <input type="text" class="form-control" name="taille" value="{{ $Consultation->taille }} ">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Poids</label><br>
                <input type="text" class="form-control" name="pois" value="{{ $Consultation->pois }}">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Tension</label><br>
                <input type="text" class="form-control" name="tension" value="{{ $Consultation->tension }}">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Température</label><br>
                <input type="text" class="form-control" name="temperatur" value="{{ $Consultation->temperatur }}">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Examen</label><br>
                <input type="text" class="form-control" name="examen" value="{{ $Consultation->examen }}">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Conclusion</label><br>
                <input type="text" class="form-control" name="conclusion" value="{{ $Consultation->conclusion }}">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">La date</label><br>
                <input type="date" class="form-control" name="date" value="{{ $Consultation->date }}">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">L'heure</label><br>
                <input type="text" class="form-control" name="heure" value="{{ $Consultation->heure }}">
            </div>

            <input type="submit" value="valider">
        </form>
    </div>


@endsection
