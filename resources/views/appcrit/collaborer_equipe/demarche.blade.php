@extends('layouts.app')

@section('title', 'Collaborer efficacement')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Appliquer une démarche pour intégrer une équipe informatique au sein d'une organisation</h1>
    </div>
</div>
<div class="container">
    <h2> Entretien avec la responsable commerciale et animation réseau</h2>
    <h3 style="margin-top: 50px; margin-bottom: 50px;">J'ai démontré ma maîtrise de cet apprentissage critique en participant à un entretien avec la responsable commerciale et animation réseau de Beepway.com, 
        permettant d'identifier les besoins et les attentes de l'organisation.</h3>
</div>
<div class="container">
    <div class="comp-grid">
        <div class="comp-card">
            <div class="comp-image">
                <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750788837/presentation_beepway_dquz2k.png" alt="presentation_api_transit" class="clickable-image" onclick="openModal(this.src)">
            </div>
            <div class="comp-content">
                <h3>Présentation d'Api Transit, un outil d'automatisation des formalités douanières</h3>
            </div>
        </div>
    </div>
</div>
@endsection 