@extends('nav_Med')
@section('app')
    <div class="form">
        <h1>Formulaire des dépenses</h1></br>
        <form action="{{ route('depense.store') }}" method="POST" enctype="multipart/form-data">
            <!-- 'enctype' est important car il informe qu' on va envoyer un fichier-->
            @csrf
            <div>
                <label for="exampleFormControlInput1" class="form-label">Mois de dépense</label><br>
                <input type="text" class="form-control" name="mois_dep" placeholder="">
                @error('mois_dep')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Motif de dépense</label><br>
                <input type="text" class="form-control" name="motif_dep">
                @error('motif_dep')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Montant de dépense</label><br>
                <input type="text" class="form-control" name="montant_dep">
                @error('montant_dep')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <input type="submit" class="btn btn-success" value="Valider">
            </div>
        </form>

    </div>
@endsection
