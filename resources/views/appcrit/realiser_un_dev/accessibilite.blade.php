@extends('layouts.app')
@section('title', 'Accessibilité')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Appliquer des principes d'accessibilité et d'ergonomie</h1>
    </div>
</div>
<div class="container">
    <h2>The Legend of Link : A New Zelda Adventure</h2>
    <h3 style="margin-top: 50px; margin-bottom: 50px;">L'ergonomie et l'accessibilité sont visibles dans plusieurs choix de conception :</h3>
</div>
<div class="container">
    <div class="comp-grid">
        <div class="comp-card">
            <div class="comp-image">
                <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750438957/wasd_touches_directions_tih95o.png" alt="wasd">
            </div>
            <div class="comp-content">
                <h3>Contrôles clavier intuitifs</h3>
            </div>
        </div>
        <div class="comp-card">
            <div class="comp-image">
                <video autoplay muted loop >
                    <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750434769/gestion_sante_vnx6e8.mp4" type="video/mp4" >
                </video>
            </div>
            <div class="comp-content">
                <h3>Affichage clair des points de vie sous forme de cœurs</h3>
            </div>
        </div>
        <div class="comp-card">
            <div class="comp-image">
                <video autoplay muted loop >
                    <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750434769/interaction_ennemis_modif_u5gibn.mp4" type="video/mp4" alt="wasd">
                </video>
            </div>
            <div class="comp-content">
                <h3>Feedback visuel lors des dégâts (changement de couleur du sprite, clignotement)</h3>
            </div>
        </div>
        <div class="comp-card">
            <div class="comp-image">
                <video autoplay muted loop >
                    <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750438957/menu_pause_relam4.mp4" type="video/mp4" alt="wasd">
                </video>
            </div>
            <div class="comp-content">
                <h3>Les menus de pause et de mort permettent de reprendre ou d'arrêter la partie de manière fluide</h3>
            </div>
        </div>
    </div>
</div>
@endsection