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
        <h1>Formulaire des dépenses</h1></br>
        <form action="/saveD" method="get" enctype="multipart/form-data">
            <!-- 'enctype' est important car il informe qu' on va envoyer un fichier-->
            @csrf
            <div >
                <label for="exampleFormControlInput1" class="form-label">Mois de dépense</label><br>
                <input type="text" class="form-control" name="mois_dep" placeholder="">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Motif de dépense</label><br>
                <input type="text" class="form-control" name="motif_dep">
            </div>
            <div >
                <label for="exampleFormControlInput1" class="form-label">Montant de dépense</label><br>
                <input type="text" class="form-control" name="montant_dep">
            </div>


            <div >
                <input type="submit" class="btn btn-success" value="Valider">
            </div>
        </form>

    </div>
@endsection
