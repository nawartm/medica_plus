@extends('nav_Med')
@section('app')

<<<<<<< HEAD
<div class="form">
<h1>Formulaire Gestion des Fiches Examens</h1>
=======
<div class="container">
<h1>Formulaire gestion des fiches examens</h1>
>>>>>>> 2d288098f36baa354ea7baf340f055d19da3d8e9

      <form action="{{ url('Fiche_Examen/' .$fiche_examens->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$fiche_examens->id}}" id="id" />
<<<<<<< HEAD
        <div>
          <label>Date Examen</label><br>
          <input type="text" name="date_examen" id="date_examen" value="{{$fiche_examens->date_examen}}" class="form-control"></br>
        </div>
        <div>
          <label>Résultat</label><br>
          <input type="text" name="resultat" id="resultat" value="{{$fiche_examens->resultat}}" class="form-control"></br>
        </div>
        <input type="submit" value="modifier" class="btn btn-success">
=======



        <label>La date L'examen</label></br>
        <input type="text" name="date_examen" id="date_examen" value="{{$fiche_examens->date_examen}}" class="form-control"></br>
        <label>Résultat</label></br>
        <input type="text" name="resultat" id="resultat" value="{{$fiche_examens->resultat}}" class="form-control"></br>


        <input type="submit" value="Valider" class="btn btn-success"></br>
>>>>>>> 2d288098f36baa354ea7baf340f055d19da3d8e9
    </form>



  </div>
@endsection
