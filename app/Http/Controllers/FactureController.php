<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    /*-------ajouter Facture------- */
    public function index()
    {
        $facture = new Facture();
        $listFactures = $facture::orderBy('id', 'desc')->get();

        return view("facture.listFactures", ['listF' => $listFactures]);
    }

    /*-------enregistrer facture------- */
    public function store(Request $request)
    {

        $date =  $request['date'];
        $tarif_cns =  $request['tarif_cns'];
        $nom_pat =  $request['nom_pat'];
        $prenom_pat =  $request['prenom_pat'];

        $facture = new Facture();

        $facture->date = $date;
        $facture->tarif_cns = $tarif_cns;
        $facture->nom_pat = $nom_pat;
        $facture->prenom_pat = $prenom_pat;

        $facture->save();
        return redirect::Route('listFactures');
    }

    /*-------lister factures------- */
    public function search(Request $request)
    {
        $search = $request->search;

        $listFactures = Facture::where(function ($query) use ($search) {
            $query->where('nom_pat', 'like', "%$search%")->orWhere('prenom_pat', 'like', "%$search%");
        })->get();

        return view("facture.listFactures", ['listF' => $listFactures]);
    }
    /*-------supprimer factures------- */
    public function destroy(Request $request)
    {
        $facture = Facture::find($request->id);

        if ($facture) {
            $facture->delete();
            return redirect()->route('facture.index')->with('message', 'Successfully deleted!');
        }

        return redirect()->route('facture.index')->with('error', 'Facture not found.');
    }

    /*-------modifier facture------- */
    public function edit($id)
    {
        $factures = Facture::find($id);
        return view('facture.edit')->with('factures', $factures);
    }

    public function update(Request $request, $id)
    {
        $facture = Facture::where('id', $id)->first();
        $facture->date = $request->date;
        $facture->tarif_cns = $request->tarif_cns;
        $facture->nom_pat = $request->nom_pat;
        $facture->prenom_pat = $request->prenom_pat;

        $facture->save();
        return redirect()->route('listFactures');
    }


    /*-------afficher depenses------- */
    public function show($id)
    {
        $factures = Facture::where('id', $id)->first();
        return view('facture.show')->with('factures', $factures);
    }

    public function create()
    {
        return view('facture.facture');
    }
}
