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
        <h1>Formulaire des consultations</h1></br>
        <form action="{{ route('Consultation.store') }}" method="post" enctype="multipart/form-data">
            <!-- 'enctype' est important car il informe qu' on va envoyer un fichier-->
            @csrf
            <div>
                <label for="exampleFormControlInput1" class="form-label">Nom du patient</label><br>
                <input type="text" class="form-control" name="nom_pat" >
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Prénom du patient</label><br>
                <input type="text" class="form-control" name="prenom_pat">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Nom du médecin</label><br>
                <input type="text" class="form-control" name="nom_med" >
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Prénom du médecin</label><br>
                <input type="text" class="form-control" name="prenom_med">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Motif</label><br>
                <input type="text" class="form-control" name="motif">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Taille</label><br>
                <input type="text" class="form-control" name="taille">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Poids</label><br>
                <input type="text" class="form-control" name="pois">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Tension</label><br>
                <input type="text" class="form-control" name="tension">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Température</label><br>
                <input type="text" class="form-control" name="temperatur">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Examen</label><br>
                <input type="text" class="form-control" name="examen">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Conclusion</label><br>
                <input type="text" class="form-control" name="conclusion">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">La date</label><br>
                <input type="date" class="form-control" name="date">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">L'heure</label><br>
                <input type="text" class="form-control" name="heure">
            </div>
            <input type="submit" class="btn btn-success" value="Valider">

        </form>

    </div>
@endsection
