
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
           <h1>Formulaire de facture</h1>
           </div>
           <div class="card-body">
               <form action="/saveF" method="get" enctype="multipart/form-data"> <!-- 'enctype' est important car il informe qu' on va envoyer un fichier--> 
               @csrf
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">Dtae</label>
                   <input type="date" class="form-control" name="date" placeholder="">
               </div>
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">Tarif de consultation</label>
                   <input type="text" class="form-control" name="tarif_cns" >
               </div>
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">Nom du patient</label>
                   <input type="text" class="form-control" name="nom_pat" >
               </div>
               
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">Prenom du patient</label>
                   <input type="text" class="form-control" name="prenom_pat" value="2022-02-22">
               </div>
              
            
              
               <div class="mb-1">
                   <input type="submit" value="Valider">
               </div>
               </form>
           
               </div>
           </div>
    </div>
@endsection
