@extends('nav_Med')
@section('app')


    <div class="form">
        <h1>Formulaire des Consultations</h1></br>
        <form action="{{ route('Consultation.update', $Consultation->id) }}" method="post" enctype="multipart/form-data">
            <!-- 'enctype' est important car il informe qu' on va envoyer un fichier-->
            @method('PUT')
            @csrf
            <div >
                <label for="exampleFormControlInput1" class="form-label">Nom du patient</label><br>
                <input type="text" class="form-control" name="nom_pat"
                    value="{{ $Consultation->nom_pat }}">
                    @error('nom_pat')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Prénom du patient</label><br>
                <input type="text" class="form-control" name="prenom_pat" value="{{ $Consultation->prenom_pat }}">
                @error('prenom_pat')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Nom du médecin</label><br>
                <input type="text" class="form-control" name="nom_med"
                    value="{{ $Consultation->nom_med }}">
                    @error('nom_med')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Prénom du médecin</label><br>
                <input type="text" class="form-control" name="prenom_med" value="{{ $Consultation->prenom_med }}">
                @error('prenom_med')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Motif</label><br>
                <input type="text" class="form-control" name="motif" value="{{ $Consultation->motif }} ">
                @error('motif')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Taille</label><br>
                <input type="text" class="form-control" name="taille" value="{{ $Consultation->taille }} ">
                @error('taille')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Poids</label><br>
                <input type="text" class="form-control" name="pois" value="{{ $Consultation->pois }}">
                @error('pois')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Tension</label><br>
                <input type="text" class="form-control" name="tension" value="{{ $Consultation->tension }}">
                @error('tension')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Température</label><br>
                <input type="text" class="form-control" name="temperatur" value="{{ $Consultation->temperatur }}">
                 @error('temperatur')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Examen</label><br>
                <input type="text" class="form-control" name="examen" value="{{ $Consultation->examen }}">
                @error('examen')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Conclusion</label><br>
                <input type="text" class="form-control" name="conclusion" value="{{ $Consultation->conclusion }}">
                @error('conclusion')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">La date</label><br>
                <input type="date" class="form-control" name="date" value="{{ $Consultation->date }}">
                @error('date')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">L'heure</label><br>
                <input type="text" class="form-control" name="heure" value="{{ $Consultation->heure }}">
                @error('heure')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <input type="submit" class="btn btn-success" value="valider">
        </form>
    </div>


@endsection
