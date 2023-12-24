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

    <div class="card">
        <div class="card-header">
            <h1>Formulaire des consultations</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('Consultation.store') }}" method="post" enctype="multipart/form-data">
                <!-- 'enctype' est important car il informe qu' on va envoyer un fichier-->
                @csrf
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Nom du patient</label>
                    <input type="text" class="form-control" name="nom_pat" placeholder="Entrez le nom du patient">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Prenom du patient</label>
                    <input type="text" class="form-control" name="prenom_pat">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Nom du medcin</label>
                    <input type="text" class="form-control" name="nom_med" placeholder="Entrez le nom du patient">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Prenom du medcin</label>
                    <input type="text" class="form-control" name="prenom_med">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">motif</label>
                    <input type="text" class="form-control" name="motif">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">taille</label>
                    <input type="text" class="form-control" name="taille">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">pois</label>
                    <input type="text" class="form-control" name="pois">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">tension</label>
                    <input type="text" class="form-control" name="tension">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">temperatur</label>
                    <input type="text" class="form-control" name="temperatur">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">examen</label>
                    <input type="text" class="form-control" name="examen">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">conclusion</label>
                    <input type="text" class="form-control" name="conclusion">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">date</label>
                    <input type="date" class="form-control" name="date">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">heure</label>
                    <input type="text" class="form-control" name="heure">
                </div>

                <input type="submit" class="btn btn-primary" value="Valider">
        </div>
        </form>

    </div>
@endsection
