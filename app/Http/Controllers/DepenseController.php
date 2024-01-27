<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Depense;
class DepenseController extends Controller
{
    /*-------ajouter depense------- */
    public function index(){
       return view('depense.depense');
    }

    /*-------enregistrer depense------- */
    public function save(Request $request){

        $mois_dep =  $request['mois_dep'];
        $motif_dep =  $request['motif_dep'];
        $montant_dep =  $request['montant_dep'];

        $depense = new Depense();

        $depense->mois_dep = $mois_dep ;
        $depense->motif_dep = $motif_dep ;
        $depense->montant_dep = $montant_dep ;

        $depense->save();
        return redirect::Route('listDepenses');
    }

     /*-------lister depenses------- */
     public function listDepenses(){
        $depense = new Depense();
        $listDepenses = $depense::orderBy('id', 'desc')->get();

        return view("depense.listDepenses",['listD'=>$listDepenses] );
    }

    /*-------modifier depenses------- */
    public function edit($id){
        $depenses=Depense::find($id);
        return view('depense.edit')->with('depenses',$depenses);
     }

     public function update(Request $request ,$id){
        $depense=Depense::where('id',$id)->first();
        $depense->mois_dep=$request->mois_dep;
        $depense->motif_dep=$request->motif_dep;
        $depense->montant_dep=$request->montant_dep;

        $depense->save();
        return redirect()->route('listDepenses');
    }

      public function show($id)
     {
         $depense = Depense::find($id);
         return view('depense.show')->with('depense', $depense);
     }



}
