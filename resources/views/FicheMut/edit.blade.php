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
                        <h1>Formulaire Gestion des fiches mutuelles</h1></br>

                        <form action="{{ url('FicheMut/' . $fiche_muts->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method('PATCH')
                            <input type="hidden" name="id" id="id" value="{{ $fiche_muts->id }}"
                            id="id" />
                            <div>
                                <label>Nom patient</label></br>
                                <input type="text" name="nom_pat" id="nom_pat" value="{{ $fiche_muts->nom_pat }}"
                                class="form-control"></br>
                            </div>
                            <div>
                                <label>Prénom patient</label></br>
                                <input type="text" name="prenom_pat" id="prenom_pat" value="{{ $fiche_muts->prenom_pat }}"
                                class="form-control"></br>
                            </div>
                            <div>
                                <label>Nom médecin</label></br>
                                <input type="text" name="nom_med" id="nom_med" value="{{ $fiche_muts->nom_med }}"
                                class="form-control"></br>
                            </div>
                            <div>
                                <label>Prénom médecin</label></br>
                                <input type="text" name="prenom_med" id="prenom_med" value="{{ $fiche_muts->prenom_med }}"
                                class="form-control"></br>
                            </div>
                            <div>
                                <label>La date du soin</label></br>
                                <input type="text" name="date_soins" id="date_soins" value="{{ $fiche_muts->date_soins }}"
                                class="form-control"></br>
                            </div>
                            <div>
                                <label>Code mutuelle</label></br>
                                <input type="text" name="code_mut" id="code_mut" value="{{ $fiche_muts->code_mut }}"
                                class="form-control"></br>
                            </div>
                            <div>
                                <label>Montant total</label></br>
                                <input type="text" name="montant_total" id="montant_total"
                                value="{{ $fiche_muts->montant_total }}" class="form-control"></br>
                            </div>
                            <div>
                                <label>Montant mutuelle</label></br>
                                <input type="text" name="montant_mut" id="montant_mut"
                                value="{{ $fiche_muts->montant_mut }}" class="form-control"></br>
                            </div>

                            <input type="submit" value="Valider" class="btn btn-success"></br>
                        </form>
                    </div>
                @endsection
