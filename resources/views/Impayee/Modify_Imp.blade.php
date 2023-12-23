@extends('nav_Med')
@section('app')
    <div class=" mt-5 container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-6 col-lg-8">
                <div class="mx-3 me-5 ">
                    @if ($errors->any())
                        <div class="alert alert-danger col-8 offset-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h1>Formulaire des Impayees</h1>
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
                                    <label for="exampleFormControlInput1" class="form-label">Prenom du patient</label>
                                    <input type="text" class="form-control" name="prenom_pat"
                                        value="{{ $Impayee->prenom_pat }}">
                                </div>
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">telefone du patient</label>
                                    <input type="text" class="form-control" name="tel_pat"
                                        value="{{ $Impayee->tel_pat }}">
                                </div>
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">montant_APS</label>
                                    <input type="text" class="form-control" name="montant_APS"
                                        value="{{ $Impayee->montant_APS }}">
                                </div>
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">montant_RS</label>
                                    <input type="text" class="form-control" name="montant_RS"
                                        value="{{ $Impayee->montant_RS }}">
                                </div>

                                <div class="mb-1">
                                    <link rel="stylesheet"
                                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                                    <input type="submit" value="Modifier">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            @endsection
