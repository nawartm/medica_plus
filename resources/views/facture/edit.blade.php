@extends('nav_Med')
@section('app')
    <div class="form">
        <h1>Formulaire des factures</h1><br>
        <form action="{{ route('facture.update', $factures->id) }}" method="get" enctype="multipart/form-data">
            <!-- 'enctype' est important car il informe qu' on va envoyer un fichier-->
            @csrf
            <div>
                <label for="exampleFormControlInput1" class="form-label">La date</label><br>
                <input type="date" class="form-control" name="date" value=" {{ $factures->date }}">
                @error('date')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label for="exampleFormControlInput1" class="form-label">Tarif de consultation</label><br>
                <input type="text" class="form-control" name="tarif_cns" value=" {{ $factures->tarif_cns }}">
                @error('tarif_cns')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Nom du patient</label><br>
                <input type="text" class="form-control" name="nom_pat" value=" {{ $factures->nom_pat }}">
                @error('nom_pat')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label for="exampleFormControlInput1" class="form-label">Prénom du patient</label><br>
                <input type="text" class="form-control" name="prenom_pat" value=" {{ $factures->prenom_pat }}">
                @error('prenom_pat')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <input type="submit" class="btn btn-success" value="Valider">
            </div>
        </form>

    </div>
@endsection
