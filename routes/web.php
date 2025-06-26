<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AppCritController;

//Route::get('/', function () {
    //return view('HomePage');
//});

Route::get('/', function () {
    return view('accueil');
})->name('home');

Route::get('/cv', [PageController::class, 'cv'])->name('cv');

Route::get('/competences', [PageController::class, 'competences'])->name('competences');

Route::get('/passions', [PageController::class, 'passions'])->name('passions');



// Routes pour les sous-pages de compétences utilisant AppCritController
Route::get('/specifications', [AppCritController::class, 'specifications'])->name('specifications');
Route::get('/accessibilite', [AppCritController::class, 'accessibilite'])->name('accessibilite');
Route::get('/conception', [AppCritController::class, 'conception'])->name('conception');
Route::get('/test', [AppCritController::class, 'test'])->name('test');
Route::get('/structure', [AppCritController::class, 'structure'])->name('structure');
Route::get('/algorithmes', [AppCritController::class, 'algorithmes'])->name('algorithmes');
Route::get('/techniques', [AppCritController::class, 'techniques'])->name('techniques');
Route::get('/impact', [AppCritController::class, 'impact'])->name('impact');
Route::get('/assurer', [AppCritController::class, 'assurer'])->name('assurer');
Route::get('/optimiser', [AppCritController::class, 'optimiser'])->name('optimiser');
Route::get('/organiser', [AppCritController::class, 'organiser'])->name('organiser');
Route::get('/manipuler', [AppCritController::class, 'manipuler'])->name('manipuler');
Route::get('/formaliser', [AppCritController::class, 'formaliser'])->name('formaliser');
Route::get('/suivi', [AppCritController::class, 'suivi'])->name('suivi');
Route::get('/processus', [AppCritController::class, 'processus'])->name('processus');
Route::get('/faisabilite', [AppCritController::class, 'faisabilite'])->name('faisabilite');
Route::get('/demarche', [AppCritController::class, 'demarche'])->name('demarche');
Route::get('/structureIT', [AppCritController::class, 'structureIT'])->name('structureIT');
Route::get('/integration', [AppCritController::class, 'integration'])->name('integration');
Route::get('/activite', [AppCritController::class, 'activite'])->name('activite');
Route::get('/virtualiser', [AppCritController::class, 'virtualiser'])->name('virtualiser');
Route::get('/securiser', [AppCritController::class, 'securiser'])->name('securiser');
Route::get('/conception_app', [AppCritController::class, 'conception_app'])->name('conception_app');

// BUT 1 - Réaliser un développement d'application
Route::get('/conception_simples', [AppCritController::class, 'conception_simples'])->name('conception_simples');
Route::get('/essais', [AppCritController::class, 'essais'])->name('essais');
Route::get('/interface', [AppCritController::class, 'interface'])->name('interface');

// BUT 1 - Optimiser des applications
Route::get('/analyser', [AppCritController::class, 'analyser'])->name('analyser');
Route::get('/comparer', [AppCritController::class, 'comparer'])->name('comparer');
Route::get('/outils_math', [AppCritController::class, 'outils_math'])->name('outils_math');

// BUT 1 - Administrer des systèmes informatiques communicants complexes
Route::get('/hardware', [AppCritController::class, 'hardware'])->name('hardware');
Route::get('/multitache', [AppCritController::class, 'multitache'])->name('multitache');
Route::get('/configurer', [AppCritController::class, 'configurer'])->name('configurer');
Route::get('/poste', [AppCritController::class, 'poste'])->name('poste');

// BUT 1 - Gérer des données de l'information
Route::get('/interroger', [AppCritController::class, 'interroger'])->name('interroger');
Route::get('/visualiser', [AppCritController::class, 'visualiser'])->name('visualiser');
Route::get('/concevoir', [AppCritController::class, 'concevoir'])->name('concevoir');

// BUT 1 - Conduire un projet
Route::get('/apprehender', [AppCritController::class, 'apprehender'])->name('apprehender');
Route::get('/gestion', [AppCritController::class, 'gestion'])->name('gestion');
Route::get('/acteurs', [AppCritController::class, 'acteurs'])->name('acteurs');

// BUT 1 - Collaborer au sein d'une équipe informatique
Route::get('/ecosysteme', [AppCritController::class, 'ecosysteme'])->name('ecosysteme');
Route::get('/aptitudes', [AppCritController::class, 'aptitudes'])->name('aptitudes');
Route::get('/statuts', [AppCritController::class, 'statuts'])->name('statuts');

// Ajouter les autres routes selon vos besoins...
