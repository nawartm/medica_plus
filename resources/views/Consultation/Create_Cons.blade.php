@extends('nav_Med')
@section('app')
    <div class="form">
        <h1>Formulaire des consultations</h1></br>
        <form action="{{ route('Consultation.store') }}" method="post" enctype="multipart/form-data">
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
                <label for="exampleFormControlInput1" class="form-label">Motif</label><br>
                <input type="text" class="form-control" name="motif">
                @error('motif')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Taille</label><br>
                <input type="text" class="form-control" name="taille">
                @error('taille')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Poids</label><br>
                <input type="text" class="form-control" name="pois">
                @error('pois')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Tension</label><br>
                <input type="text" class="form-control" name="tension">
                @error('tension')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Température</label><br>
                <input type="text" class="form-control" name="temperatur">
                @error('temperatur')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Examen</label><br>
                <input type="text" class="form-control" name="examen">
                @error('examen')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Conclusion</label><br>
                <input type="text" class="form-control" name="conclusion">
                @error('conclusion')
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
                <label for="exampleFormControlInput1" class="form-label">L'heure</label><br>
                <input type="text" class="form-control" name="heure">
                @error('heure')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <input type="submit" class="btn btn-success" value="Valider">

        </form>

    </div>
@endsection
