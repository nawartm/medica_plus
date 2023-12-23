@extends('nav_Med')
@section('app')
  
<div class="container">
<h1>Formulaire Gestion des Fiches Examen</h1>
      
      <form action="{{ url('Fiche_Examen/' .$fiche_examens->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$fiche_examens->id}}" id="id" />
        
        
        
        <label>Date Examen</label></br>
        <input type="text" name="date_examen" id="date_examen" value="{{$fiche_examens->date_examen}}" class="form-control"></br>
        <label>Résultat</label></br>
        <input type="text" name="resultat" id="resultat" value="{{$fiche_examens->resultat}}" class="form-control"></br>
        
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

    
  
  </div>
@endsection