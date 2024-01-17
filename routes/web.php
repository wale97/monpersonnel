<?php

use App\Models\Worker;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FiltresController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServicesController;


Route::get('register',[HomeController::class,'register'])->name('register');
Route::get('connexion',[HomeController::class,'connexion'])->name('connexion');
Route::get('services',[HomeController::class,'services'])->name('services');
Route::get('disclaimer',[HomeController::class,'disclaimer'])->name('disclaimer');

/* S E R V I C E S */
Route::get('cuisine',[ServicesController::class,'cuisine'])->name('cuisine');
Route::get('coursier',[ServicesController::class,'coursier'])->name('coursier');
Route::get('chauffeur',[ServicesController::class,'chauffeur'])->name('chauffeur');
Route::get('nettoyage',[ServicesController::class,'nettoyage'])->name('nettoyage');
Route::get('nounou',[ServicesController::class,'nounou'])->name('nounou');
Route::get('personnelmaison',[ServicesController::class,'personneldemaison'])->name('personnel');
Route::get('nursing',[ServicesController::class,'nursing'])->name('nursing');

/*  R E G I S T R A T I O N  */
Route::get('customerregister',[RegisterController::class,'customer'])->name('client');
Route::get('workerregister',[RegisterController::class,'worker'])->name('travailleur');

/*  P O S T  */
Route::post('store',[RegisterController::class,'store'])->name('store');
Route::post('storeworker',[RegisterController::class, 'storeworker'])->name('storeworker');

/*  F I L T R E S  */
Route::get('filtres',[FiltresController::class, 'filtres'])->name('filtres');
Route::post('filtres',[FiltresController::class,'filtrer'])->name('filtrer');

/* R E C H E R C H E */
route::get('voirworkers',[WorkerController::class,'voirworkers'])->name('voirworkers');
route::post('voirworkers',[SearchController::class,'search'])->name('search');
route::get('filtres',[FiltresController::class,'voir'])->name('filtres');

/*  C  O  N  T  A  C  T  */

Route::get('contact',[ContactController::class, 'contacter'])->name('contacter');
Route::post('contact',[ContactController::class, 'envoi'])->name('contact.envoi');

/*  C  O  N  T  A  C  T  */

/*  P  R  O  F  I  L  */ 

Route::get('workerprofile',[ProfileController::class,'workerprofile'])->name('workerprofile');



/*  P  R  O  F  I  L */

/* R  E  C  R  U  T  E  M  E  N  T */

Route::post('recruter/{worker}',[CustomerController::class,'recruter'])->name('recruter');

/* R  E  C  R  U  T  E  M  E  N  T */

/*  L  O  G  I  N  */

Route::get('auth/login',[LoginController::class, 'login'])->name('login');

Route::post('auth/login',[LoginController::class, 'dologin'])->name('dologin');

Route::get('customerprofile',[CustomerController::class,'customerprofile'])->name('customerprofile');



Route::post('/logout',[LoginController::class,'logout'])->name('logout');

/* L O  G  I  N  */

Route::get('/', [HomeController::class, 'home2'])->name('home');
