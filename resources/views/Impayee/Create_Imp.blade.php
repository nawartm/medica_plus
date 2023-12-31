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
        <h1>Formulaire des impayés</h1><br>
        <form action="{{ route('Impayee.store') }}" method="post" enctype="multipart/form-data">
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
                <label for="exampleFormControlInput1" class="form-label">Tél du patient</label><br>
                <input type="text" class="form-control" name="tel_pat">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Montant_APS</label><br>
                <input type="text" class="form-control" name="montant_APS">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Montant_RS</label><br>
                <input type="text" class="form-control" name="montant_RS">
            </div>

            <input type="submit" class="btn btn-success" value="Valider">
    </div>
    </form>
@endsection
