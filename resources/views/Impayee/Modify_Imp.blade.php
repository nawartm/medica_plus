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

<<<<<<< HEAD
    <div class="form">
        <h1>Formulaire des Impayés</h1>
        <form action="{{ route('Impayee.update', $Impayee->id) }}" method="post" enctype="multipart/form-data">
            <!-- 'enctype' est important car il informe qu' on va envoyer un fichier-->
            @method('PUT')
            @csrf

            <div >
                <label for="exampleFormControlInput1" class="form-label">Nom du patient</label><br>
                <input type="text" class="form-control" name="nom_pat" placeholder="Entrez le nom du patient"
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
                <input type="submit" value="Modifier">
            </div>
        </form>
    </div>
@endsection
=======
                    <div class="card">
                        <div class="card-header">
                            <h1>Formulaire des impayés</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Impayee.update', $Impayee->id) }}" method="post"
                                enctype="multipart/form-data">
                                <!-- 'enctype' est important car il informe qu' on va envoyer un fichier-->
                                @method('PUT')
                                @csrf

                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Nom du patient</label>
                                    <input type="text" class="form-control" name="nom_pat"
                                        placeholder="Entrez le nom du patient" value="{{ $Impayee->nom_pat }}">
                                </div>
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Prénom du patient</label>
                                    <input type="text" class="form-control" name="prenom_pat"
                                        value="{{ $Impayee->prenom_pat }}">
                                </div>
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Tél du patient</label>
                                    <input type="text" class="form-control" name="tel_pat"
                                        value="{{ $Impayee->tel_pat }}">
                                </div>
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Montant_APS</label>
                                    <input type="text" class="form-control" name="montant_APS"
                                        value="{{ $Impayee->montant_APS }}">
                                </div>
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Montant_RS</label>
                                    <input type="text" class="form-control" name="montant_RS"
                                        value="{{ $Impayee->montant_RS }}">
                                </div>

                                <div class="mb-1">
                                    <link rel="stylesheet"
                                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                                    <input type="submit" value="Valider">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            @endsection
>>>>>>> 2d288098f36baa354ea7baf340f055d19da3d8e9
