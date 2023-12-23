<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\RendezVous;
use Illuminate\Http\Request;

class RendezVousController extends Controller
{
    
    //ajouter
     public function index(){
         return view('RDV.creat');
     }

    //enregistrer
    public function save(Request $request){
      
        $nom_patient =  $request['nom_patient'];
        $prenom_patient =  $request['prenom_patient'];
        $tel_patient =  $request['tel_patient'];
        $date =  $request['date'];
        $heure= $request['heure'];
        
        $RDV = new RendezVous();

        $RDV->nom_pat = $nom_patient ;
        $RDV->prenom_pat = $prenom_patient ;
        $RDV->tel_pat = $tel_patient ;
        $RDV->date =  $date  ;
        $RDV->heure=$heure;

        $RDV->save();
        return redirect::Route('listRDV');
    }

    //lister
    public function listRDV(Request $request){
        $RDV = new RendezVous();
        $listRDV = $RDV::all();

        return view("RDV.listRDV",['listR'=>$listRDV] );
    
    }

    //supprimer
    public function delete(Request $request){

        $id =  $request['id'];
        $RDV = new RendezVous();
        $RDV->find($id)->delete();
    
        return Redirect::route('listRDV')->with(['message'=> 'Successfully deleted!!']);
    }

    //modifier
    public function edit($id){
        $RDV=RendezVous::find($id);
        return view('RDV.edit')->with('RDV',$RDV);
    }
    
    public function update(Request $request ,$id){
        $RDV=RendezVous::where('id',$id)->first();
        $RDV->nom_pat=$request->nom_patient;
        $RDV->prenom_pat=$request->prenom_patient;
        $RDV->tel_pat=$request->tel_patient;
        $RDV->date=$request->date;
        $RDV->heure=$request->heure;
        
        $RDV->save(); 
        return redirect()->route('listRDV');
    }

}
