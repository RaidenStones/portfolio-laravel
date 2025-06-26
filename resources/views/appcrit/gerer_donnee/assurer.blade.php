@extends('layouts.app')
@section('title', 'Assurer')
@section('content')
<div class="container">
    <div class="page-header">
        <h1>Assurer la confidentialité des données(intégrité et sécurité)</h1>
    </div>
</div>
<div class="container">
    <h2> Formulaire de déclaration de douane - Site de location d'appareils électroniques</h2>
    <h3 style="margin-top: 50px; margin-bottom: 50px;">J'ai démontré ma maîtrise de ce premier apprentissage critique à travers plusieurs réalisations concrètes. D'une part au cours de mon stage chez Beepway.com et d'autre part en implémentant un système d'administration sécurisé pour une plateforme de location d'appareils électroniques :</h3>
</div>
<div class="container">
    <div class="comp-grid">
        <div class="comp-card">
            <div class="comp-image">
                <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750688216/securisation_code_gveaii.png" alt="champs conditionnels" class="clickable-image" onclick="openModal(this.src)">
            </div>
            <div class="comp-content">
                <h3>Utilisation d'un token CSRF automatiquement généré par le framework Laravel pour protéger les formulaires contre les attaques CSRF</h3>
            </div>
        </div>
        <div class="comp-card">
            <div class="comp-image">
                <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750721671/Tableau_de_bord_Admin___Historique_de_pr%C3%AAts_tfrcws.png" alt="champs conditionnels" class="clickable-image" onclick="openModal(this.src)">
            </div>
            <div class="comp-content">
                <h3>Réalisation d'un tableau de bord admin permettant de visualiser les prêts et les emprunts</h3>
            </div>
        </div>
    </div>
@endsection