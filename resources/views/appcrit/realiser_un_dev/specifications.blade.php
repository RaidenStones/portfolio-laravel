@extends('layouts.app')
@section('title', 'Spécifications')

@section('content')
<div class="container">
            <div class="page-header">
                <h1>Élaborer et implémenter les spécifications fonctionnelles</h1>
            </div>
        </div>
        <div class="container">
            <h2>The Legend of Link : A New Zelda Adventure</h2>
            <h3 style="margin-top: 50px; margin-bottom: 50px;">Ce projet traduit la définition de la spécification fonctionnelle par la description détaillée des fonctionnalités attendues du jeu</h3>
        </div>
        <div class="comp-grid">
            <div class="comp-card">
                <div class="comp-image">
                    <video autoplay muted loop >
                        <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750430498/deplacements_b6rnsn.mp4" type="video/mp4" >
                    </video>
                </div>
                <div class="comp-content">
                    <h3>Gestion des déplacements</h3>
                </div>
            </div>
            <div class="comp-card">
                <div class="comp-image">
                    <video autoplay muted loop >
                        <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750431977/attaques_jehvhn.mp4" type="video/mp4" >
                    </video>
                </div>
                <div class="comp-content">
                    <h3>Gestion des attaques</h3>
                </div>
            </div>
            
        </div>
        <div class="comp-grid">
            <div class="comp-card">
                <div class="comp-image">
                    <video autoplay muted loop >
                        <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750444501/invulnerabilite_modif_kafqce.mp4" type="video/mp4" >
                    </video>
                </div>
                <div class="comp-content">
                    <h3>Interaction avec les ennemis</h3>
                </div>
            </div>
            <div class="comp-card">
                <div class="comp-image">
                    <video autoplay muted loop >
                        <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750434769/gestion_sante_vnx6e8.mp4" type="video/mp4" >
                    </video>
                </div>
                <div class="comp-content">
                    <h3>Gestion de la santé</h3>
                </div>
            </div>
        </div>
@endsection
