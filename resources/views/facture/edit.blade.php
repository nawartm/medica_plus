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
        <h1>Formulaire des factures</h1>
        <form action="{{ route('/updateF', $factures->id) }}" method="get" enctype="multipart/form-data">
            <!-- 'enctype' est important car il informe qu' on va envoyer un fichier-->
            @csrf
<<<<<<< HEAD
            <div>
                <label for="exampleFormControlInput1" class="form-label">Date</label><br>
                <input type="date" class="form-control" name="date" placeholder="" value=" {{ $factures->date }}">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Tarif de consultation</label><br>
=======
            <div >
                <label for="exampleFormControlInput1" class="form-label">La date</label>
                <input type="date" class="form-control" name="date" placeholder=""
                    value=" {{ $factures->date }}>
               </div>
               <div >
                <label for="exampleFormControlInput1" class="form-label">Tarif de consultation</label>
>>>>>>> 2d288098f36baa354ea7baf340f055d19da3d8e9
                <input type="text" class="form-control" name="tarif_cns" value=" {{ $factures->tarif_cns }}">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Nom du patient</label><br>
                <input type="text" class="form-control" name="nom_pat" value=" {{ $factures->nom_pat }}">
            </div>

            <div>
                <label for="exampleFormControlInput1" class="form-label">Prénom du patient</label><br>
                <input type="text" class="form-control" name="prenom_pat" value=" {{ $factures->prenom_pat }}">
            </div>
            <div>
                <input type="submit" value="Valider">
            </div>
        </form>

    </div>
@endsection
