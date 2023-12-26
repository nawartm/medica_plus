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
        <h1>Formulaire de Rendez-vous</h1>
        <form action="/save" method="get" enctype="multipart/form-data">
            <!-- 'enctype' est important car il informe qu' on va envoyer un fichier-->
            @csrf
            <div >
                <label for="exampleFormControlInput1" class="form-label">Nom du patient</label><br>
                <input type="text" class="form-control" name="nom_patient" placeholder="Entrez le nom du patient">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Prénom du patient</label><br>
                <input type="text" class="form-control" name="prenom_patient">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Tél patient</label><br>
                <input type="text" class="form-control" name="tel_patient">
            </div>

            <div >
                <label for="exampleFormControlInput1" class="form-label">la date</label><br>
                <input type="date" class="form-control" name="date" value="2022-02-22">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">l'heure</label><br>
                <input type="text" class="form-control" name="heure">
            </div>
            <div >
                <input type="submit" value="Valider">
            </div>
        </form>
    </div>
@endsection
