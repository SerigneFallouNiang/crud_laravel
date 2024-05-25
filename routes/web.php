<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('articles', function (){
//     return view ('articles');
// });
Route::get('\etudiant',[EtudiantController::class, 'liste_etudiant']);
Route::get('\ajouter',[EtudiantController::class, 'ajouter_etudiant']);
Route::post('\ajouter/traitement',[EtudiantController::class, 'ajouter_etudiant_traitement']); 