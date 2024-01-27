<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ordonnance;
use App\Models\Certificat;
use App\Models\Consultation;
use App\Models\Fiche_Examen;
use App\Models\Facture;
use app\Models\Depense;
use app\models\RendezVous;
use App\Models\Fiche_Patient;


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
        return view('home');
    }

    public function filter(Request $request) 
    {
        

    }
}
