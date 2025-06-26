@extends('layouts.app')

@section('title', 'Intégrer une équipe')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Mobiliser les compétences interpersonnelles pour travailler dans une équipe informatique</h1>
    </div>
</div>
<div class="container">
    <h2> Réunion chez Beepway.com </h2>
    <h3 style="margin-top: 50px; margin-bottom: 50px;">J'ai démontré ma maîtrise de cet apprentissage critique en mobilisant mes compétences 
        relationnelles et communicationnelles lors de réunions stratégiques chez Beepway.com, notamment en participant activement aux échanges</h3>
</div>
<div class="container">
    <div class="comp-grid">
        <div class="comp-card">
            <div class="comp-image">
                <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750773739/processus_ugjcv9.png" alt="tasks_beepway" class="clickable-image" onclick="openModal(this.src)">
            </div>
            <div class="comp-content">
                <h3>Participation active aux réunions d'avancement du projet et proposition de solutions</h3>
            </div>
        </div>
    </div>
</div>

@endsection 