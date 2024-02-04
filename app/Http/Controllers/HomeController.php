<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ordonnance;
use App\Models\Certificat;
use App\Models\Consultation;
use App\Models\Fiche_Examen;
use App\Models\FicheMut;
use App\Models\Facture;
use App\Models\Depense;
use App\Models\Impayee;
use App\Models\Patient;
use App\Models\RendezVous;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Ordonnances = Ordonnance::whereDate('created_at', Carbon::today())->count();
        $Certificat = Certificat::whereDate('created_at', Carbon::today())->count();
        $Consultation = Consultation::whereDate('created_at', Carbon::today())->count();
        $Fiche_Examen = Fiche_Examen::whereDate('created_at', Carbon::today())->count();
        $totale_mat = FicheMut::whereDate('created_at', Carbon::today())->sum('montant_total');
        $montant_mut = FicheMut::whereDate('created_at', Carbon::today())->sum('montant_mut');
        $impyees_aps = Impayee::whereDate('created_at', Carbon::today())->sum('montant_aps');
        $impyees_rs = Impayee::whereDate('created_at', Carbon::today())->sum('montant_rs');
        $factures = Facture::whereDate('created_at', Carbon::today())->sum('tarif_cns');
        $depense = Depense::whereDate('created_at', Carbon::today())->sum('montant_dep');
        $patients = Patient::whereDate('created_at', Carbon::today())->count();
        $rdv = RendezVous::whereDate('created_at', Carbon::today())->count();


        return view('home', [
            'ordonnances' => $Ordonnances,
            'certificat' => $Certificat,
            'consultation' => $Consultation,
            'fiche_examen' => $Fiche_Examen,
            'totale_mat' => $totale_mat,
            'montant_mut' => $montant_mut,
            'impyees_aps' => $impyees_aps,
            'impyees_rs' => $impyees_rs,
            'factures' => $factures,
            'depense' => $depense,
            'patients' => $patients,
            'rdv' => $rdv,            
        ]);
    }

    public function filter(Request $request) 
    {
        

    }
}
