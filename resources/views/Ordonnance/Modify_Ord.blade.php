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

                    <div class="form">
                            <h1>Formulaire d'ordonnance</h1></br>
                        <div class="card-body">
                            <form action="{{ route('Ordonnance.update', $Ordonnance->id) }}" method="post"
                                enctype="multipart/form-data">
                                <!-- 'enctype' est important car il informe qu' on va envoyer un fichier-->
                                @method('PUT')
                                @csrf

                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Nom du patient</label><br>
                                    <input type="text" class="form-control" name="nom_pat"
                                         value="{{ $Ordonnance->nom_pat }}">
                                </div>
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Prénom du patient</label><br>
                                    <input type="text" class="form-control" name="prenom_pat"
                                        value="{{ $Ordonnance->prenom_pat }}">
                                </div>
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Nom du médecin</label><br>
                                    <input type="text" class="form-control" name="nom_med"
                                        value="{{ $Ordonnance->nom_med }}">
                                </div>
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Prénom du médecin</label><br>
                                    <input type="text" class="form-control" name="prenom_med"
                                        value="{{ $Ordonnance->prenom_med }}" >
                                </div>
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">La date</label><br>
                                    <input type="date" class="form-control" name="date"
                                        value="{{ $Ordonnance->date }}">
                                </div>
                                <div class="mb-1">
                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label><br>
                                    <textarea class="form-control" name="description" rows="3"
                                        value="{{ $Ordonnance->description }}"></textarea>
                                </div>

                                <div class="mb-1">
                                    <link rel="stylesheet"
                                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                                    <button type="submit" class="btn btn-success">Valider</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            @endsection
