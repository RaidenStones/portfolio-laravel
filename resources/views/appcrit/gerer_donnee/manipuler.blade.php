@extends('layouts.app')
@section('title', 'Manipuler')
@section('content')
<div class="container">
    <div class="page-header">
        <h1>Manipuler des données hétérogènes</h1>
    </div>
</div>
<div class="container">
    <h2> Formulaire de déclaration de douane - Chatbot de révision</h2>
    <h3 style="margin-top: 50px; margin-bottom: 50px;">J'ai démontré ma maîtrise de cet apprentissage critique en traitant et intégrant des données de formats variés, notamment en transformant de lourds fichiers XML en tables de référence structurées avec des modèles Eloquent chez Beepway.com, et en développant un chatbot capable d'analyser des documents PDF pour générer des questionnaires interactifs.</h3>
</div>
<div class="comp-grid">
    <div class="comp-card">
        <div class="comp-image">
            <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750644992/creation_tables_cajhip.png" alt="wasd" class="clickable-image" onclick="openModal(this.src)">
        </div>
        <div class="comp-content">
            <h3>Création de tables de référence (bureaux, régimes douaniers, pays) avec des modèles Eloquent et des relations complexes à partir de lourds fichiers XML</h3>
        </div>
    </div>
    <div class="comp-card">
        <div class="comp-image">
            <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750716654/revapp1_eoyo3b.png" alt="wasd" class="clickable-image" onclick="openModal(this.src)">
        </div>
        <div class="comp-content">
            <h3>Création d'un chatbot analysant des pdf et posant des questions sur les données de ces pdfs</h3>
        </div>
    </div>
</div>


@endsection