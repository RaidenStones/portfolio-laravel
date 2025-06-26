@extends('layouts.app')
@section('title', 'Techniques')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Comprendre les enjeux et moyens de sécurisation des données et du code</h1>
    </div>
</div>
<div class="container">
    <h2> Sujet de Stage - Formulaire de déclaration de douane</h2>
    <h3 style="margin-top: 50px; margin-bottom: 50px;">J'ai abordé ce troisième apprentissage critique en intégrant des considérations de sécurité dans mes développements, bien que cet aspect mériterait d'être approfondi dans mes futurs projets :</h3>
</div>
<div class="container">
    <div class="comp-grid">
        <div class="comp-card">
            <div class="comp-image">
                <img src="https://user.oc-static.com/upload/2022/05/09/16521047600873_P2C1-3%20%281%29.png" alt="champs conditionnels" class="clickable-image" onclick="openModal(this.src)">
            </div>
            <div class="comp-content">
                <h3>Utilisation du framework Laravel pour sécuriser les formulaires via le modèle MVC</h3>
            </div>
        </div>
        <div class="comp-card">
            <div class="comp-image">
                <video autoplay muted loop >
                    <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750688856/securisation_code_fq1mtp.mp4" type="video/mp4" >
                </video>
            </div>
            <div class="comp-content">
                <h3>Un système d'exclusivité entre champs (Nom/EORI) prévient les incohérences de données qui pourraient être exploitées</h3>
            </div>
        </div>
    </div>
    <div class="comp-grid">
        
        <div class="comp-card">
            <div class="comp-image">
                <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750689914/modularite_code_kjg7eg.png" alt="modularité" class="clickable-image" onclick="openModal(this.src)">
            </div>
            <div class="comp-content">
                <h3>Utilisation de la modularité dans l'organisation du code pour séparer les responsabilités et faciliter la maintenance</h3>
            </div>
        </div>
    </div>
</div>

@endsection