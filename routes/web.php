<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RendezVousController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\OrdonnanceController;
use App\Http\Controllers\ImpayeeController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\CertificatController;
use App\Http\Controllers\FichePatientController;
use App\Http\Controllers\MutuelleController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function(){
    Route::resource('RDV', RendezVousController::class);
    Route::match(['get', 'post'], '/RDVSearch', [RendezVousController::class, 'search']);
    Route::resource('depense', DepenseController::class);
    Route::resource('facture', FactureController::class);
    Route::match(['get', 'post'], '/factureSearch', [FactureController::class, 'search']);
    Route::resource('Impayee', ImpayeeController::class);
    Route::match(['get', 'post'], '/ImpayeeSearch', [ImpayeeController::class, 'search']);
    Route::resource('Fiche_Patient', FichePatientController::class);
    Route::match(['get', 'post'], '/PatientSearch', [FichePatientController::class, 'search']);
    Route::resource('Consultation', ConsultationController::class);
    Route::match(['get', 'post'], '/ConsultationSearch', [CertificatController::class, 'search']);
});

Route::middleware(['auth','role:assistante'])->group(function(){
    Route::resource('Consultation', ConsultationController::class);
    Route::match(['get', 'post'], '/ConsultationSearch', [CertificatController::class, 'search']);
    Route::resource('RDV', RendezVousController::class);
    Route::match(['get', 'post'], '/RDVSearch', [RendezVousController::class, 'search']);
    Route::resource('Ordonnance', OrdonnanceController::class);
    Route::match(['get', 'post'], '/OrdonnanceSearch', [OrdonnanceController::class, 'search']);
    Route::resource('Fiche_Patient', FichePatientController::class);
    Route::match(['get', 'post'], '/PatientSearch', [FichePatientController::class, 'search']);
    Route::resource('Certificat', CertificatController::class);
    Route::match(['get', 'post'], '/CertificatSearch', [CertificatController::class, 'search']);
    Route::resource('facture', FactureController::class);
    Route::match(['get', 'post'], '/factureSearch', [FactureController::class, 'search']);
});

Route::middleware(['auth','role:doctor'])->group(function(){
    Route::resource('RDV', RendezVousController::class);
    Route::match(['get', 'post'], '/RDVSearch', [RendezVousController::class, 'search']);
    Route::resource('Impayee', ImpayeeController::class);
    Route::match(['get', 'post'], '/ImpayeeSearch', [ImpayeeController::class, 'search']);
    Route::resource('Fiche_Patient', FichePatientController::class);
    Route::match(['get', 'post'], '/PatientSearch', [FichePatientController::class, 'search']);
    Route::resource('FicheMut', MutuelleController::class);
    Route::match(['get', 'post'], '/MutSearch', [MutuelleController::class, 'search']);
    Route::resource('facture', FactureController::class);
    Route::match(['get', 'post'], '/factureSearch', [FactureController::class, 'search']);
    Route::resource('depense', DepenseController::class);
    Route::resource('Ordonnance', OrdonnanceController::class);
    Route::match(['get', 'post'], '/OrdonnanceSearch', [OrdonnanceController::class, 'search']);
    Route::resource('Certificat', CertificatController::class);
    Route::match(['get', 'post'], '/CertificatSearch', [CertificatController::class, 'search']);
    Route::resource('Fiche_Examen', ExamenController::class);
    Route::resource('Consultation', ConsultationController::class);
    Route::match(['get', 'post'], '/ConsultationSearch', [CertificatController::class, 'search']);
});

Route::middleware(['auth','role:admin'])->group(function(){
    Route::resource('users', UsersController::class);
    Route::match(['get', 'post'], '/UserSearch', [UsersController::class, 'search']);
    Route::resource('RDV', RendezVousController::class);
    Route::match(['get', 'post'], '/RDVSearch', [RendezVousController::class, 'search']);
    Route::resource('Impayee', ImpayeeController::class);
    Route::match(['get', 'post'], '/ImpayeeSearch', [ImpayeeController::class, 'search']);
    Route::resource('Fiche_Patient', FichePatientController::class);
    Route::match(['get', 'post'], '/PatientSearch', [FichePatientController::class, 'search']);
    Route::resource('FicheMut', MutuelleController::class);
    Route::match(['get', 'post'], '/MutSearch', [MutuelleController::class, 'search']);
    Route::resource('facture', FactureController::class);
    Route::match(['get', 'post'], '/factureSearch', [FactureController::class, 'search']);
    Route::resource('depense', DepenseController::class);
    Route::resource('Ordonnance', OrdonnanceController::class);
    Route::match(['get', 'post'], '/OrdonnanceSearch', [OrdonnanceController::class, 'search']);
    Route::resource('Certificat', CertificatController::class);
    Route::match(['get', 'post'], '/CertificatSearch', [CertificatController::class, 'search']);
    Route::resource('Fiche_Examen', ExamenController::class);
    Route::resource('Consultation', ConsultationController::class);
    Route::match(['get', 'post'], '/ConsultationSearch', [CertificatController::class, 'search']);
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::match(['get', 'post'],'/homeFilter', [App\Http\Controllers\HomeController::class, 'filter'])->name('filter');