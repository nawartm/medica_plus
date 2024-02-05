<?php
/****************Impayee***************/
namespace App\Http\Controllers;
use App\Http\Requests\ImpayeeRequest;
use Illuminate\Http\Request;
use App\Models\Impayee;

class ImpayeeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $Impayee =Impayee::orderBy('id', 'desc')->get();
        return view('Impayee.crudImpayee',compact('Impayee'));
    
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $Impayee = Impayee::where(function ($query) use ($search) {
            $query->where('nom_pat', 'like', "%$search%")->orWhere('prenom_pat', 'like', "%$search%");
        })->get();  

        return view('Impayee.crudImpayee',compact('Impayee'));
    }

     /* Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return view('Impayee.Create_Imp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ImpayeeRequest $request)
    {

        $Impayee = new Impayee();
        $Impayee->nom_pat=$request->nom_pat;
        $Impayee->prenom_pat=$request->prenom_pat;
        $Impayee->tel_pat=$request->tel_pat;
        $Impayee->montant_APS=$request->montant_APS;
        $Impayee->montant_RS=$request->montant_RS;

        $Impayee->save();

           return redirect()->route('Impayee.index');


    }

    /**
     * Delete a resource in storage.
     *
     * @return Response
     */
    public function destroy($id)
    {
        $Impayee=Impayee::find($id)->delete();
        return redirect()->route('Impayee.index');
    }

    public function edit($id)
    {
        $Impayee = Impayee::find($id);
        return view('Impayee.Modify_Imp',compact('Impayee'));
    }

    public function update(ImpayeeRequest $request, $id)
    {

        $Impayee = Impayee::where('id',$id)->first();
        $Impayee->nom_pat=$request->nom_pat;
        $Impayee->prenom_pat=$request->prenom_pat;
        $Impayee->tel_pat=$request->tel_pat;
        $Impayee->montant_APS=$request->montant_APS;
        $Impayee->montant_RS=$request->montant_RS;

        $Impayee->save();
        return redirect()->route('Impayee.index');
    }

    public function show($id)
    {
        $Impayee = Impayee::find($id);
        return view('Impayee.show')->with('Impayee', $Impayee) ;
    }

}
