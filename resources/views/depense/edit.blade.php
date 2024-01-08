@extends('nav_Med')
@section('app')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="form">
        <h1>Formulaire des dépenses</h1>
        <form action="{{ route('/updateD', $depenses->id) }}" method="get" enctype="multipart/form-data">
            <!-- 'enctype' est important car il informe qu' on va envoyer un fichier-->
            @csrf
            <div>
                <label for="exampleFormControlInput1" class="form-label">Mois de dépense</label><br>
                <input type="text" class="form-control" name="mois_dep" value=" {{ $depenses->mois_dep }}">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Motif de dépense</label><br>
                <input type="text" class="form-control" name="motif_dep" value=" {{ $depenses->motif_dep }}">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Montant de dépense</label><br>
                <input type="text" class="form-control" name="montant_dep" value=" {{ $depenses->montant_dep }}">
            </div>

            <div>
                <input type="submit" value="Valider">
            </div>
        </form>

    @endsection
