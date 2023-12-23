
@extends('nav_Med')
@section('app')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<div class=" mt-5 container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-6 col-lg-8">
<div class="mx-3 me-5 ">
@if($errors->any())
<div class="alert alert-danger col-8 offset-2">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card">
           <div class="card-header">
           <h1>Formulaire de depense</h1>
           </div>
           <div class="card-body">
               <form action="{{route('/updateD',$depenses->id)}}" method="get" enctype="multipart/form-data"> <!-- 'enctype' est important car il informe qu' on va envoyer un fichier--> 
               @csrf
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">Mois de depense</label>
                   <input type="text" class="form-control" name="mois_dep"  value=" {{$depenses->mois_dep}}">
               </div>
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">Motif de depense</label>
                   <input type="text" class="form-control" name="motif_dep" value=" {{$depenses->motif_dep}}" >
               </div>
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">Montant de depense</label>
                   <input type="text" class="form-control" name="montant_dep" value=" {{$depenses->montant_dep}}" >
               </div>
               
              
               <div class="mb-1">
                   <input type="submit" value="Valider">
               </div>
               </form>
           
               </div>
           </div>
    </div>
@endsection
