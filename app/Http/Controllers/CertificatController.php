<?php

/*********************Certificat**********************/

namespace App\Http\Controllers;

use  App\Models\Certificat;
use Illuminate\Http\Request;

class CertificatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $certificats = Certificat::orderBy('id', 'desc')->get();
        return view('Certificat.index')->with('certificats', $certificats);
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $certificats = Certificat::where(function ($query) use ($search) {
            $query->where('nom_pat', 'like', "%$search%")->orWhere('prenom_pat', 'like', "%$search%");
        })->get();

        return view('Certificat.index')->with('certificats', $certificats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return view('Certificat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_pat' => 'required|max:255',
            'prenom_pat' => 'required|max:255',
            'nom_med' => 'required|max:255',
            'prenom_med' => 'required|max:255',
            'date' => 'required|date',
            'heure' => 'required',
            'dure' => 'required|numeric',
        ]);

        $Certificat = new Certificat;
        $Certificat->nom_pat = $request->input('nom_pat');
        $Certificat->prenom_pat = $request->input('prenom_pat');
        $Certificat->nom_med = $request->input('nom_med');
        $Certificat->prenom_med = $request->input('prenom_med');
        $Certificat->date = $request->input('date');
        $Certificat->heure = $request->input('heure');
        $Certificat->dure = $request->input('dure');
        $Certificat->save();

        return redirect()->route('Certificat.index');
    }

    /**
     * Delete a resource in storage.
     *
     * @return Response
     */
    public function destroy($id)
    {
        $Certificat = Certificat::find($id)->delete();
        return redirect()->route('Certificat.index');
    }

    public function edit($id)
    {
        $certificats = Certificat::find($id);
        return view('Certificat.edit', ['certificats' => $certificats]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom_pat' => 'required|max:255',
            'prenom_pat' => 'required|max:255',
            'nom_med' => 'required|max:255',
            'prenom_med' => 'required|max:255',
            'date' => 'required|date',
            'heure' => 'required',
            'dure' => 'required|numeric',
        ]);

        $Certificat = Certificat::find($id);
        $Certificat->nom_pat = $request->input('nom_pat');
        $Certificat->prenom_pat = $request->input('prenom_pat');
        $Certificat->nom_med = $request->input('nom_med');
        $Certificat->prenom_med = $request->input('prenom_med');
        $Certificat->date = $request->input('date');
        $Certificat->heure = $request->input('heure');
        $Certificat->dure = $request->input('dure');
        $Certificat->save();

        return redirect()->route('Certificat.index');
    }

    public function show($id)
    {
        $certificats = Certificat::find($id);
        return view('Certificat.show')->with('certificats', $certificats);
    }
}
