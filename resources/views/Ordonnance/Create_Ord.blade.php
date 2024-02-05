@extends('nav_Med')
@section('app')
    <div class="form">
        <h1>Formulaire d'ordonnance</h1></br>
        <form action="{{ route('Ordonnance.store') }}" method="post" enctype="multipart/form-data">
            <!-- 'enctype' est important car il informe qu' on va envoyer un fichier-->
            @csrf
            <div>
                <label for="exampleFormControlInput1" class="form-label">Nom du patient</label><br>
                <input type="text" class="form-control" name="nom_pat">
                @error('nom_pat')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Prénom du patient</label><br>
                <input type="text" class="form-control" name="prenom_pat">
                @error('prenom_pat')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Nom du médecin</label><br>
                <input type="text" class="form-control" name="nom_med">
                @error('nom_med')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Prénom du médecin</label><br>
                <input type="text" class="form-control" name="prenom_med">
                @error('prenom_med')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">La date</label><br>
                <input type="date" class="form-control" name="date">
                @error('date')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="exampleFormControlTextarea1" class="form-label">Description</label><br>
                <textarea class="form-control" name="description" rows="3"></textarea>
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <button type="submit" class="btn btn-success">Valider</button>
            </div>
        </form>
    </div>
@endsection
