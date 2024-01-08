@extends('nav_Med')
@section('app')

<div class="form">
<h1>Formulaire Gestion des Fiches Examens</h1>

      <form action="{{ url('Fiche_Examen/' .$fiche_examens->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$fiche_examens->id}}" id="id" />
        <div>
          <label>Date Examen</label><br>
          <input type="text" name="date_examen" id="date_examen" value="{{$fiche_examens->date_examen}}" class="form-control"></br>
        </div>
        <div>
          <label>Résultat</label><br>
          <input type="text" name="resultat" id="resultat" value="{{$fiche_examens->resultat}}" class="form-control"></br>
        </div>
        <input type="submit" value="modifier" class="btn btn-success">
    </form>



  </div>
@endsection
