<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Depense;

class DepenseController extends Controller
{
    /*-------ajouter depense------- */
    public function index()
    {
        $listDepenses = Depense::orderBy('id', 'desc')->get();

        return view("depense.listDepenses", ['listD' => $listDepenses]);
    }

    /*-------enregistrer depense------- */
    public function store(Request $request)
    {

        $mois_dep =  $request['mois_dep'];
        $motif_dep =  $request['motif_dep'];
        $montant_dep =  $request['montant_dep'];

        $depense = new Depense();

        $depense->mois_dep = $mois_dep;
        $depense->motif_dep = $motif_dep;
        $depense->montant_dep = $montant_dep;

        $depense->save();
        return redirect()->route('depense.index');
    }


    /*-------modifier depenses------- */
    public function edit($id)
    {
        $depenses = Depense::find($id);
        return view('depense.edit')->with('depenses', $depenses);
    }

    public function update(Request $request, $id)
    {
        $depense = Depense::where('id', $id)->first();
        $depense->mois_dep = $request->mois_dep;
        $depense->motif_dep = $request->motif_dep;
        $depense->montant_dep = $request->montant_dep;

        $depense->save();
        return redirect()->route('depense.index');
    }

    public function show($id)
    {
        $depense = Depense::find($id);
        return view('depense.show')->with('depense', $depense);
    }

    public function create()
    {
        return view('depense.depense');
    } 

    public function destroy($id)
    {
        Depense::find($id)->delete();
        return redirect()->route('depense.index');
    }
    
}
