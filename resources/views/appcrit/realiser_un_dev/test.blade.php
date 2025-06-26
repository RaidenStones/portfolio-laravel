@extends('layouts.app')
@section('title', 'Test')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Vérifier et valider la qualité par les tests</h1>
    </div>
</div>
<div class="container">
    <h2>The Legend of Link : A New Zelda Adventure</h2>
    <h3 style="margin-top: 50px; margin-bottom: 50px;">La validation de la qualité du jeu a été assurée par plusieurs types de tests intégrés dans le développement :</h3>
</div>
<div class="comp-grid">
    <div class="comp-card" >
        <div class="comp-image">
            <video autoplay muted loop >
                <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750447904/fonctionnnels_lvw08t.mp4" type="video/mp4" >
            </video>
        </div>
        <div class="comp-content">
            <h3>Tests fonctionnels : vérification du bon fonctionnement des principales mécaniques (déplacement, attaque, collision, changement de carte, gestion des points de vie)</h3>
        </div>
    </div>
    <div class="comp-card" >
        <div class="comp-image">
            <video autoplay muted loop >
                <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750447905/test_interaction_q3du6g.mp4" type="video/mp4" >
            </video>
        </div>
        <div class="comp-content">
            <h3>Tests d'interaction : gestion des collisions entre le joueur, les ennemis et les projectiles, avec des retours visuels et sonores immédiats, permettant de détecter et corriger rapidement les bugs liés aux interactions</h3>
        </div>
    </div>
</div>
<div class="comp-grid">
    <div class="comp-card" >
        <div class="comp-image">
            <video autoplay muted loop >
                <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750447904/ergonomie_jxayi9.mp4" type="video/mp4" >
            </video>
        </div>
        <div class="comp-content">
            <h3>Tests ergonomie : ajustement de l’interface (affichage des cœurs, menus) et des contrôles en fonction des retours des utilisateurs/testeurs pour garantir une expérience fluide et agréable</h3>
        </div>
    </div>
    <div class="comp-card" >
        <div class="comp-image">
            <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750447904/sauvegardes_ykwmuf.png" alt="sauvegarde">
        </div>
        <div class="comp-content">
            <h3>Gestion des erreurs et sauvegardes : mise en place de sauvegardes automatiques et de la gestion des transitions entre cartes pour éviter les pertes de progression et garantir la robustesse du jeu</h3>
        </div>
    </div>
</div>
@endsection