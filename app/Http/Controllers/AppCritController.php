<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppCritController extends Controller
{
    // Realiser un développement
    public function specifications() {
        return view('appcrit.realiser_un_dev.specifications');
    }

    public function accessibilite() {
        return view('appcrit.realiser_un_dev.accessibilite');
    }

    public function conception() {
        return view('appcrit.realiser_un_dev.conception');
    }

    public function test() {
        return view('appcrit.realiser_un_dev.test');
    }

    // Optimiser des applications
    public function structure() {
        return view('appcrit.optimiser_des_app.structure');
    }

    public function algorithmes() {
        return view('appcrit.optimiser_des_app.algorithmes');
    }

    public function techniques() {
        return view('appcrit.optimiser_des_app.techniques');
    }

    public function impact() {
        return view('appcrit.optimiser_des_app.impact');
    }

    // Gérer des données de l'information
    public function assurer() {
        return view('appcrit.gerer_donnee.assurer');
    }

    public function optimiser() {
        return view('appcrit.gerer_donnee.optimiser');
    }

    public function organiser() {
        return view('appcrit.gerer_donnee.organiser');
    }

    public function manipuler() {
        return view('appcrit.gerer_donnee.manipuler');
    }

    // Conduire un projet
    public function formaliser() {
        return view('appcrit.conduire_projet.formaliser');
    }

    public function suivi() {
        return view('appcrit.conduire_projet.suivi');
    }

    public function processus() {
        return view('appcrit.conduire_projet.processus');
    }

    public function faisabilite() {
        return view('appcrit.conduire_projet.faisabilite');
    }

    // Collaborer au sein d'une équipe informatique
    public function demarche() {
        return view('appcrit.collaborer_equipe.demarche');
    }

    public function structureIT() {
        return view('appcrit.collaborer_equipe.structureIT');
    }

    public function integration() {
        return view('appcrit.collaborer_equipe.integration');
    }

    public function activite() {
        return view('appcrit.collaborer_equipe.activite');
    }

    // Administrer des systèmes informatiques communicants complexes
    public function virtualiser() {
        return view('appcrit.administrer_syst.virtualiser');
    }

    public function securiser() {
        return view('appcrit.administrer_syst.securiser');
    }

    public function conception_app() {
        return view('appcrit.administrer_syst.conception_app');
    }

    // BUT 1 - Réaliser un développement d'application
    public function conception_simples() {
        return view('appcrit.realiser_un_dev.conception_simples');
    }

    public function essais() {
        return view('appcrit.realiser_un_dev.essais');
    }

    public function interface() {
        return view('appcrit.realiser_un_dev.interface');
    }

    // BUT 1 - Optimiser des applications
    public function analyser() {
        return view('appcrit.optimiser_des_app.analyser');
    }

    public function comparer() {
        return view('appcrit.optimiser_des_app.comparer');
    }

    public function outils_math() {
        return view('appcrit.optimiser_des_app.outils_math');
    }

    // BUT 1 - Administrer des systèmes informatiques communicants complexes
    public function hardware() {
        return view('appcrit.administrer_syst.hardware');
    }

    public function multitache() {
        return view('appcrit.administrer_syst.multitache');
    }

    public function configurer() {
        return view('appcrit.administrer_syst.configurer');
    }

    public function poste() {
        return view('appcrit.administrer_syst.poste');
    }

    // BUT 1 - Gérer des données de l'information
    public function interroger() {
        return view('appcrit.gerer_donnee.interroger');
    }

    public function visualiser() {
        return view('appcrit.gerer_donnee.visualiser');
    }

    public function concevoir() {
        return view('appcrit.gerer_donnee.concevoir');
    }

    // BUT 1 - Conduire un projet
    public function apprehender() {
        return view('appcrit.conduire_projet.apprehender');
    }

    public function gestion() {
        return view('appcrit.conduire_projet.gestion');
    }

    public function acteurs() {
        return view('appcrit.conduire_projet.acteurs');
    }

    // BUT 1 - Collaborer au sein d'une équipe informatique
    public function ecosysteme() {
        return view('appcrit.collaborer_equipe.ecosysteme');
    }

    public function aptitudes() {
        return view('appcrit.collaborer_equipe.aptitudes');
    }

    public function statuts() {
        return view('appcrit.collaborer_equipe.statuts');
    }
}
