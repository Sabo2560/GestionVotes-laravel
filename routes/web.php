<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ElecteurController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// candidats routes 

Route::get('/ajouter/candidat',[CandidatController::class,'index']);
Route::get('/liste/candidat',[CandidatController::class,'liste']);
Route::post('/enregistrer/candidat',[CandidatController::class,'store'])->name('store.candidat');
Route::get('/edit-candidat/{id}',[CandidatController::class,'edit'])->name('edit-candidat');
Route::post('/modifier/candidat/{id}',[CandidatController::class,'update'])->name('update.candidat');

//electeurs routes
Route::get('/ajoute/electeur',[ElecteurController::class,'index']);
Route::get('/voter/candidat',[ElecteurController::class,'listeVote'])->name('vote.candidat');
Route::post('/voter/electeur',[ElecteurController::class,'listeVote'])->name('vote.electeur');

