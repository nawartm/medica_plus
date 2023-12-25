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
        <h1>Formulaire des consultations</h1>
        <form action="{{ route('Consultation.store') }}" method="post" enctype="multipart/form-data">
            <!-- 'enctype' est important car il informe qu' on va envoyer un fichier-->
            @csrf
            <div>
                <label for="exampleFormControlInput1" class="form-label">Nom du patient</label><br>
                <input type="text" class="form-control" name="nom_pat" placeholder="Entrez le nom du patient">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Prenom du patient</label><br>
                <input type="text" class="form-control" name="prenom_pat">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Nom du medcin</label><br>
                <input type="text" class="form-control" name="nom_med" placeholder="Entrez le nom du patient">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Prenom du medcin</label><br>
                <input type="text" class="form-control" name="prenom_med">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">motif</label><br>
                <input type="text" class="form-control" name="motif">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">taille</label><br>
                <input type="text" class="form-control" name="taille">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">pois</label><br>
                <input type="text" class="form-control" name="pois">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">tension</label><br>
                <input type="text" class="form-control" name="tension">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">temperatur</label><br>
                <input type="text" class="form-control" name="temperatur">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">examen</label><br>
                <input type="text" class="form-control" name="examen">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">conclusion</label><br>
                <input type="text" class="form-control" name="conclusion">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">date</label><br>
                <input type="date" class="form-control" name="date">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">heure</label><br>
                <input type="text" class="form-control" name="heure">
            </div>
            <input type="submit" class="btn btn-primary" value="Valider">

        </form>

    </div>
@endsection
