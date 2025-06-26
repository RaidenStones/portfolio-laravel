@extends('layouts.app')
@section('title', 'Organiser')
@section('content')
<div class="container">
    <div class="page-header">
        <h1>Organiser la restitution de données à travers la programmation et la visualisation</h1>
    </div>
</div>
<div class="container">
    <h2> Formulaire de déclaration de douane - Site de location d'appareils électroniques</h2>
    <h3 style="margin-top: 50px; margin-bottom: 50px;">J'ai démontré ma maîtrise de cet apprentissage critique en développant des interfaces de restitution de données complexes, notamment à travers le préremplissage automatique des champs de régimes douaniers dans le formulaire de déclaration chez Beepway.com et la création d'un système de panier interactif pour un site de location de matériel informatique.</h3>
</div>
<div class="container">
    <div class="comp-grid">
        <div class="comp-card">
            <div class="comp-image">
                <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750725181/restitution_donnees_doznj2.png" alt="wasd" class="clickable-image" onclick="openModal(this.src)">
            </div>
            <div class="comp-content">
                <h3>Préremplissage des champs de régimes douaniers du formulaire de déclaration de douane</h3>
            </div>
        </div>
        <div class="comp-card">
            <div class="comp-image">
                <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750725733/Panier_acywfh.png" alt="wasd" class="clickable-image" onclick="openModal(this.src)">
            </div>
            <div class="comp-content">
                <h3>Création d'un panier de commande pour les clients d'un site de location de matériel informatique</h3>
            </div>
        </div>
    </div>
</div>
@endsection