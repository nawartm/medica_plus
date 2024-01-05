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
                        <h1>Formulaire Gestion des Fiches Mutuelles</h1>


                        <form action="{{ url('FicheMut') }}" method="post">
                            {!! csrf_field() !!}
                            <div>
                                <label>Nom patient</label></br>
                                <input type="text" name="nom_pat" id="nom_pat" class="form-control"></br>
                            </div>
                            <div>
                                <label>Prénom patient</label></br>
                            <input type="text" name="prenom_pat" id="prenom_pat" class="form-control"></br>
                            </div>
                            <div>
                                <label>Nom de médecin</label></br>
                                <input type="text" name="nom_med" id="nom_med" class="form-control"></br>
                            </div>
                            <div>
                                <label>Prénom médecin</label></br>
                            <input type="text" name="prenom_med" id="prenom_med" class="form-control"></br>
                            </div>
                            <div>

                                <label>Date de Soin</label></br>
                                <input type="text" name="date_soins" id="date_soins" class="form-control"></br>
                            </div>
                            <div>

                                <label>Code Mutuelle</label></br>
                            <input type="text" name="code_mut" id="code_mut" class="form-control"></br>
                            </div>
                            <div>

                                <label>Montant Total</label></br>
                                <input type="text" name="montant_total" id="montant_total" class="form-control"></br>
                            </div>
                            <div>

                                <label>Montant Mutuelle</label></br>
                                <input type="text" name="montant_mut" id="montant_mut" class="form-control"></br>
                            </div>

                            <input type="submit" value="valider" class="btn btn-success"></br>
                        </form>
                    </div>
                @endsection
