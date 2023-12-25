@extends('nav_Med')
@section('app')
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form">
        <h1>Formulaire de facture</h1>
        <form action="/saveF" method="get" enctype="multipart/form-data">
            <!-- 'enctype' est important car il informe qu' on va envoyer un fichier-->
            @csrf
            <div>
                <label for="exampleFormControlInput1" class="form-label">Dtae</label><br>
                <input type="date" class="form-control" name="date" placeholder="">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Tarif de consultation</label><br>
                <input type="text" class="form-control" name="tarif_cns">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Nom du patient</label><br>
                <input type="text" class="form-control" name="nom_pat">
            </div>

            <div>
                <label for="exampleFormControlInput1" class="form-label">Prenom du patient</label><br>
                <input type="text" class="form-control" name="prenom_pat" value="2022-02-22">
            </div>
            <div>
                <input type="submit" value="Valider">
            </div>
        </form>
    </div>
@endsection
