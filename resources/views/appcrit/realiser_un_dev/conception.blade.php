@extends('layouts.app')
@section('title', 'Conception')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Adopter de bonnes pratiques de conception</h1>
    </div>
</div>
<div class="container">
    <h2>The Legend of Link : A New Zelda Adventure</h2>
    <h3 style="margin-top: 50px; margin-bottom: 50px;">Ce projet illustre l’adoption de bonnes pratiques de conception à plusieurs niveaux :</h3>
</div>
<div class="comp-grid">
    <div class="comp-card" >
        <div class="comp-image">
            <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750444501/modularite_xdshyz.png" alt="modularite">
        </div>
        <div class="comp-content">
            <h3>Modularité du code : séparation claire des entités du jeu (joueur, ennemis, projectiles etc...)</h3>
        </div>
    </div>
    <div class="comp-card" >
        <div class="comp-image">
            <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750444500/heritage_kauyxp.png" alt="modularite">
        </div>
        <div class="comp-content">
            <h3>Réutilisation et héritage : utilisation de classes et de l’héritage pour définir différents types d’ennemis, centraliser la gestion des attaques et des comportements,</h3>
        </div>
    </div>
</div>
<div class="comp-grid">
    <div class="comp-card" >
        <div class="comp-image">
            <video autoplay muted loop >
                <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750444501/patrouille_ennemis_t5yqzw.mp4" type="video/mp4" alt="wasd">
            </video>
        </div>
        <div class="comp-content">
            <h3>Gestion des états : chaque entité (joueur, ennemis) possède ses propres états (attaque, patrouille, poursuite, invulnérabilité)</h3>
        </div>
    </div>
    <div class="comp-card" >
        <div class="comp-image">
            <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750444939/commentaires4_vzcbjw.png" alt="modularite">
        </div>
        <div class="comp-content">
            <h3>Réutilisation et héritage : utilisation de classes et de l’héritage pour définir différents types d’ennemis, centraliser la gestion des attaques et des comportements,</h3>
        </div>
    </div>
</div>

@endsection