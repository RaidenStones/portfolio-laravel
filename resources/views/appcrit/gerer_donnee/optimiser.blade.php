@extends('layouts.app')
@section('title', 'Optimiser')
@section('content')
<div class="container">
    <div class="page-header">
        <h1>Optimiser les modèles de données de l'entreprise</h1>
    </div>
</div>
<div class="container">
    <h2> Jeu vidéo(Farm Life) - Formulaire de déclaration de douane</h2>
    <h3 style="margin-top: 50px; margin-bottom: 50px;">J'ai démontré ma maîtrise de cet apprentissage critique en restructurant l'architecture de données d'une base de données existante lors de la création d'un jeu vidéo et en concevant une table de référence spécialisée pour la gestion des déclarations douanières lors de mon stage chez Beepway.com :</h3>
</div>
<div class="container">
    <div class="comp-grid">
        <div class="comp-card">
            <div class="comp-image">
                <video autoplay muted loop >
                    <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750722774/optimiser_bdd_dncxki.mp4" type="video/mp4" >
                </video>
            </div>
            <div class="comp-content">
                <h3>Amélioration d'une base de données existante mais trop peu optimisée</h3>
            </div>
        </div>
        <div class="comp-card">
            <div class="comp-image">
                <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750723852/table_declaration_kmwcr4.png" alt="wasd" class="clickable-image" onclick="openModal(this.src)">
            </div>
            <div class="comp-content">
                <h3>Création d'une table de référence pour stocker les déclarations du formulaire de déclaration de douane</h3>
            </div>
        </div>
    </div>
</div>
@endsection