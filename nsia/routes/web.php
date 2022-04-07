<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\LayoutempController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use function PHPUnit\Framework\returnSelf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', 'App\Http\Controllers\AdminController@index')->name('welcome');
//
Route::get('/', 'App\Http\Controllers\LayoutempController@index')->name('layoutemp');
//
Route::post('/fiche', 'App\Http\Controllers\FicheController@add')->name('fiche.add');
//
Route::resource('categorie', 'App\Http\Controllers\CategorieController');
//
Route::resource('consommable', 'App\Http\Controllers\ConsommableController');
//
Route::resource('contact', 'App\Http\Controllers\ContactController');
//
Route::resource('demande', 'App\Http\Controllers\DemandeController');
//
Route::resource('departement', 'App\Http\Controllers\DepartementController');
//
Route::resource('employe', 'App\Http\Controllers\EmployeController');
//
Route::resource('fournisseur', 'App\Http\Controllers\FournisseurController');
//
Route::resource('imputationbudgetaire', 'App\Http\Controllers\ImputationbudgetaireController');
//
Route::resource('journal', 'App\Http\Controllers\JournalController');
//
Route::resource('modelle', 'App\Http\Controllers\ModelleController');
//
Route::resource('niveauvalidation', 'App\Http\Controllers\NiveauvalidationController');
//
Route::resource('occupe', 'App\Http\Controllers\OccupeController');
//
Route::resource('poste', 'App\Http\Controllers\PosteController');
//
Route::resource('profil', 'App\Http\Controllers\ProfilController');
//
Route::resource('validation', 'App\Http\Controllers\ValidateurController');
//
Route::resource('service', 'App\Http\Controllers\ServiceController');
//
Route::resource('stockconsommable', 'App\Http\Controllers\StockconsommableController');
//
Route::resource('typeimputationbudgetaire', 'App\Http\Controllers\TypeimputationbudgetaireController');
//
//Route::resource('fiche', 'App\Http\Controllers\ClientController');
//
Route::get('connexion', [AdminController::class, 'login'])->name('auth.login')->middleware('adminLogin');
//
Route::get('Inscription', [AdminController::class, 'register'])->name('auth.register')->middleware('adminNotLogin');
//
Route::post('Save', [AdminController::class, 'save'])->name('auth.save');
//
Route::post('Verification', [AdminController::class, 'check'])->name('auth.check');
//
Route::post('notifications', [AdminController::class, 'notification'])->name('notification');
//
Route::get('tableau-de-bord', [AdminController::class, 'index'])->name('welcome')->middleware('adminNotLogin');
//
Route::get('Deconnexion', [AdminController::class, 'logout'])->name('logout')->middleware('adminNotLogin');
//

///
///connexion employe

Route::get('connexionemploye', [LayoutempController::class, 'loginemp'])->name('acces.loginemp')->middleware('employeLogin');
//
Route::get('Inscriptionemploye', [LayoutempController::class, 'registeremp'])->name('acces.registeremp')->middleware('employeNotLogin');
//
Route::post('Saveemploye', [LayoutempController::class, 'saveemp'])->name('acces.saveemp');
//
Route::post('Verificationemploye', [LayoutempController::class, 'checkemp'])->name('acces.checkemp');

Route::get('plateforme-de-demande', [LayoutempController::class, 'index'])->name('page')->middleware('employeNotLogin');
//
Route::get('Deconnexionemploye', [LayoutempController::class, 'logoutemp'])->name('logoutemp')->middleware('employeNotLogin');
//
Route::get('sendemail', [DemandeController::class, 'sendMyData'])->name('sendMyMail');
