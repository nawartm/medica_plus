<?php
/////*************************************************Ordonnance**************************** */
namespace App\Http\Controllers;

use App\Models\Ordonnance;

use App\Http\Requests\OrdonnanceRequest;
use Illuminate\Http\Request;

class OrdonnanceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $Ordonnances = Ordonnance::orderBy('id', 'desc')->get();
        return view('Ordonnance.crudOrdonnance', compact('Ordonnances'));
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $Ordonnances = Ordonnance::where(function ($query) use ($search) {
            $query->where('nom_pat', 'like', "%$search%")->orWhere('prenom_pat', 'like', "%$search%");
        })->get();

        return view('Ordonnance.crudOrdonnance', compact('Ordonnances'));
    }

    public function show($id)
    {

        $Ordonnance = Ordonnance::where('id', $id)->first();
        return view('Ordonnance.Ordonnance')->with([
            'Ordonnance' => $Ordonnance
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('Ordonnance.Create_Ord');
    }


    /**
     * Delete a resource in storage.
     *
     * @return Response
     */
    public function destroy($id)
    {
        $Ordonnance = Ordonnance::find($id)->delete();
        return redirect()->route('Ordonnance.index');
    }

    public function store(OrdonnanceRequest $request)
    {

        $ligneOrdonnance = new Ordonnance();
        $ligneOrdonnance->nom_pat = $request->nom_pat;
        $ligneOrdonnance->prenom_pat = $request->prenom_pat;
        $ligneOrdonnance->nom_med = $request->nom_med;
        $ligneOrdonnance->prenom_med = $request->prenom_med;
        $ligneOrdonnance->date = $request->date;
        $ligneOrdonnance->description = $request->description;
        $ligneOrdonnance->save();

        return redirect()->route('Ordonnance.index');
    }


    public function edit($id)
    {
        $Ordonnance = Ordonnance::find($id);
        return view('Ordonnance.Modify_Ord', ['Ordonnance' => $Ordonnance]);
    }
    public function update(OrdonnanceRequest $request, $id)
    {

        $ligneOrdonnance = Ordonnance::where('id', $id)->first();

        $ligneOrdonnance->nom_pat = $request->nom_pat;
        $ligneOrdonnance->prenom_pat = $request->prenom_pat;
        $ligneOrdonnance->nom_med = $request->nom_med;
        $ligneOrdonnance->prenom_med = $request->prenom_med;
        $ligneOrdonnance->date = $request->date;
        $ligneOrdonnance->description = $request->description;
        $ligneOrdonnance->save();
        return redirect()->route('Ordonnance.index');
    }
}
