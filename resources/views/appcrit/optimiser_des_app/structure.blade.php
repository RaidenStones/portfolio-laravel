@extends('layouts.app')
@section('title', 'Structure')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Choisir des structures de données complexes adaptées au problème</h1>
    </div>
</div>
<div class="container">
    <h2> Sujet de Stage - Formulaire de déclaration de douane</h2>
    <h3 style="margin-top: 50px; margin-bottom: 50px;">J'ai démontré ma maîtrise de ce premier apprentissage critique à travers plusieurs réalisations concrètes au cours de mon stage chez Beepway.com :</h3>
</div>
<div class="container">
    <div class="comp-grid">
        <div class="comp-card">
            <div class="comp-image">
                <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750635863/Declaration_05_06_25_modif_sorsj8.png" alt="wasd" class="clickable-image" onclick="openModal(this.src)">
            </div>
            <div class="comp-content">
                <h3>Une architecture modulaire pour gérer plus de 120 champs répartis en sections logiques</h3>
            </div>
        </div>
        <div class="comp-card">
            <div class="comp-image">
                <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750644992/creation_tables_cajhip.png" alt="wasd" class="clickable-image" onclick="openModal(this.src)">
            </div>
            <div class="comp-content">
                <h3>Création de tables de référence (bureaux, régimes douaniers, pays) avec des modèles Eloquent et des relations complexes</h3>
            </div>
        </div>
    </div>
</div>

@endsection