<?php

/*****************************Consultation***************************/

namespace App\Http\Controllers;

use  App\Models\Consultation;
use Illuminate\Http\Request;
use App\Http\Requests\ConsultationRequest;


class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $Consultation = Consultation::orderBy('id', 'desc')->get();
        return response()->view('Consultation.index', array('Consultation' => $Consultation));
    }
    public function search(Request $request)
    {
        $search = $request->search;

        $Consultation = Consultation::where(function ($query) use ($search) {
            $query->where('nom_pat', 'like', "%$search%")->orWhere('prenom_pat', 'like', "%$search%");
        })->get();

        return response()->view('Consultation.index', array('Consultation' => $Consultation));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return view('Consultation.Create_Cons');
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
            'motif' => 'required',
            'pois' => 'required|numeric',
            'taille' => 'required|numeric',
            'tension' => 'required|numeric',
            'temperatur' => 'required|numeric',
            'examen' => 'required',
            'conclusion' => 'required',
            'date' => 'required|date',
            'heure' => 'required',
        ]);

        $Consultation = new Consultation;
        $Consultation->nom_pat = $request->input('nom_pat');
        $Consultation->prenom_pat = $request->input('prenom_pat');
        $Consultation->nom_med = $request->input('nom_med');
        $Consultation->prenom_med = $request->input('prenom_med');
        $Consultation->motif = $request->input('motif');
        $Consultation->pois = $request->input('pois');
        $Consultation->taille = $request->input('taille');
        $Consultation->tension = $request->input('tension');
        $Consultation->temperatur = $request->input('temperatur');
        $Consultation->examen = $request->input('examen');
        $Consultation->conclusion = $request->input('conclusion');
        $Consultation->date = $request->input('date');
        $Consultation->heure = $request->input('heure');
        $Consultation->save();

        return redirect()->route('Consultation.index');
    }

    /**
     * Delete a resource in storage.
     *
     * @return Response
     */
    public function destroy($id)
    {
        $Consultation = Consultation::find($id)->delete();
        return redirect()->route('Consultation.index');
    }

    public function edit($id)
    {
        $Consultation = Consultation::find($id);
        return view('Consultation.Modify_Cons', compact('Consultation'));
    }

    public function update(ConsultationRequest $request, $id)
    {
        $request->validate([
            'nom_pat' => 'required|max:255',
            'prenom_pat' => 'required|max:255',
            'nom_med' => 'required|max:255',
            'prenom_med' => 'required|max:255',
            'motif' => 'required',
            'pois' => 'required|numeric',
            'taille' => 'required|numeric',
            'tension' => 'required|numeric',
            'temperatur' => 'required|numeric',
            'examen' => 'required',
            'conclusion' => 'required',
            'date' => 'required|date',
            'heure' => 'required',
        ]);

        $Consultation = Consultation::find($id);
        $Consultation->nom_pat = $request->nom_pat;
        $Consultation->prenom_pat = $request->prenom_pat;
        $Consultation->nom_med = $request->nom_med;
        $Consultation->prenom_med = $request->prenom_med;
        $Consultation->motif = $request->motif;
        $Consultation->pois = $request->pois;
        $Consultation->taille = $request->taille;
        $Consultation->tension = $request->tension;
        $Consultation->temperatur = $request->temperatur;
        $Consultation->examen = $request->examen;
        $Consultation->conclusion = $request->conclusion;
        $Consultation->date = $request->date;
        $Consultation->heure = $request->heure;
        $Consultation->save();
        return redirect()->route('Consultation.index');
    }
    public function show($id)
    {
        $consultation = Consultation::find($id);
        return view('Consultation.show')->with('consultation', $consultation);
    }
}
