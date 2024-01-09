@extends('nav_Med')
@section('app')
    @if ($errors->any())
        <div class="">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form">
        <h1>Formulaire des Impayés</h1></br>
        <form action="{{ route('Impayee.update', $Impayee->id) }}" method="post" enctype="multipart/form-data">
            <!-- 'enctype' est important car il informe qu' on va envoyer un fichier-->
            @method('PUT')
            @csrf

            <div >
                <label for="exampleFormControlInput1" class="form-label">Nom du patient</label><br>
                <input type="text" class="form-control" name="nom_pat"
                    value="{{ $Impayee->nom_pat }}">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Prénom du patient</label><br>
                <input type="text" class="form-control" name="prenom_pat" value="{{ $Impayee->prenom_pat }}">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">tél du patient</label><br>
                <input type="text" class="form-control" name="tel_pat" value="{{ $Impayee->tel_pat }}">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">montant_APS</label><br>
                <input type="text" class="form-control" name="montant_APS" value="{{ $Impayee->montant_APS }}">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">montant_RS</label><br>
                <input type="text" class="form-control" name="montant_RS" value="{{ $Impayee->montant_RS }}">
            </div>

            <div >
                <input type="submit" class="btn btn-success" value="Valider">
            </div>
        </form>
    </div>
@endsection
